<?php

namespace App\Http\Controllers\Front;

use Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use App\Models\Media;
use App\Models\Products;
use App\Models\Order\Order;
use App\Models\Page;
use App\Models\Widget;
use App\Models\Users\User;
use Illuminate\Support\Str;
use App\Http\Requests\RegisterAccount;
use App\Http\Requests\LoginAccount;
use App\Http\Requests\UpdateAccount;
use App\Models\Users\Role;
use Illuminate\Pagination\LengthAwarePaginator;
use Config,Gen;
use Session,
    Auth;
use Veritrans_VtWeb;
use Veritrans_Transaction;
use Exception;

class PageCtrl extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 
     * @return type
     */
    public function index()
    {
        //Chuyen muc dich vu
        $slugcat = 'dich-vu';
        $findcat = Category\Category::where('slug', $slugcat)->first();
        $this->data['catProducts'] = Category\Category::with('product')->where('parent','=',$findcat['id'])->where('status','=','1')->where('viewhome','=','1')->take(3)->get();
        //dd($this->data['catProducts']);
        $this->data['title'] = Gen::genOpt('title');
        return view('frontend.recreation-center.pages.home', $this->data);
    }
    /**
     * 
     * @param RegisterAccount $request
     * @return type
     */
    public function registerAccount(RegisterAccount $request)
    {
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $input['status'] = 1;
        $user = new User($input);
        if ($user->save()) {
            $user->attachRole(5);
            return redirect("/")->with('status', 'Tài khoản được tạo thành công!');
        }
    }
    /**
     * 
     * @param type $slug
     * @return type
     */
    public function show($slug) {
        $findnew = News\News::where('slug', $slug)->first();
        if (count($findnew)) {
            $this->data['new'] = $findnew;
            return view('frontend.recreation-center.pages.newsdetail', $this->data);
        }

        $page = Page\Page::where('page_slug', $slug)->first();
        if (count($page)) {
            $this->data['page'] = $page;
            $this->data['title'] = $page->page_name.' | '.Gen::genOpt('title');;
            return view('frontend.recreation-center.pages.pages', $this->data);
        }
        return abort('404', 'Page Not Found');
    }

    /**
     *
     * @param type $slug
     * @return type
     */
    public function services() {
        $findcat = Category\Category::where('slug', 'dich-vu')->first();
        $this->data['catProducts'] = Category\Category::with('product')->where('parent','=',$findcat['id'])->where('status','=','1')->orderBy('order')->get();
        return view('frontend.recreation-center.pages.services', $this->data);
    }

    /**
     *
     * @param type $slug
     * @return type
     */
    public function service($slug) {
        $slug = 'dich-vu/'.$slug;
        $this->data['catProducts'] = Category\Category::with('product')->where('slug','=',$slug)->where('status','=','1')->orderBy('order')->get();
        return view('frontend.recreation-center.pages.services', $this->data);
    }

    /**
     *
     * @param type $slug
     * @return type
     */
    public function product($slug,$product) {
        $findpro = Products\Product::where('slug', $product)->first();

        $this->data['product'] = $findpro;
        $this->data['related_product'] = Products\Product::where('id_category', $findpro->id_category)->where('id', '!=', $findpro->id)->get();
        if (count($findpro) > 0) {
            return view('frontend.recreation-center.pages.product', $this->data);
        }
    }
    /**
     *
     * @param type $slug
     * @return type
     */
    public function news() {
        //Tin hoat dong tren trang chu
        $slugcat = 'tin-tuc';
        $perPage = Gen::genOpt('post_perpage_front');
        $findcat = Category\Category::where('slug', $slugcat)->first();
        $this->data['news'] = News\News::where('status','=','1')->where('id_category','=',$findcat['id'])->orderBy('order')->paginate($perPage);
        return view('frontend.recreation-center.pages.news', $this->data);
    }
    /**
     * 
     * @param UpdateAccount $request
     * @return type
     */
    public function updateAccount(UpdateAccount $request)
    {
        $input = $request->all();
        if ($input["password"]!="") {
            $input["password"] = bcrypt($input["password"]);
        }else{
            unset($input["password"]);
        }
        $user=User::find(Auth::user()->id);
        if ($user->update($input)) {
             return redirect()->to("customer/account")->with(['data' => Request::all()]);
        }
    }
    /**
     * 
     * @return type
     */
    public function getAccount()
    {
        if (!Auth::check()) {
            return redirect('customer/login');
        }
        return view('frontend.recreation-center.pages.account', $this->data);
    }
    /**
     * 
     * @param LoginAccount $request
     * @return type
     * @throws Exception
     */
    public function login(LoginAccount $request)
    {
        $message = '';
        $username = $request->get('username');
        $password = $request->get('password');
        $remember = $request->get('remember');
        $check = User::where('username', '=', $username)->get();
        try {
            if (!count($check) > 0) {
                throw new Exception("Tài khoản không tồn tại!");
            }
            if (!Auth::validate(['username' => $username, 'password' => $password, 'status' => 1])) {
                throw new Exception("login faild!");
            } elseif ($remember) {
                if (Auth::attempt(['username' => $username, 'password' => $password, 'status' => 1, $remember])) {
                    return redirect('customer/account');
                }
            } else {
                if (Auth::attempt(['username' => $username, 'password' => $password, 'status' => 1])) {
                    return redirect('customer/account');
                }
            }
        } catch (Exception $e) {
            $message = $e->getMessage();
        }
        return redirect($this->getRedirectUrl())->withInput()->withErrors(['message' => $message], "login");
    }
}
