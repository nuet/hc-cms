<?php

namespace App\Http\Controllers\Front;

use Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use App\Models\Products;
use App\Models\Page;
use App\Models\Users\User;
use App\Http\Requests\RegisterAccount;
use Config,Gen;
use Session,
    Auth;

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
        $this->data['title'] = Gen::genOpt('title');
        return view('frontend.recreation-center.pages.home', $this->data);
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
            $this->data['related_new'] = News\News::where('id_category', $findnew->id_category)->where('id', '!=', $findnew->id)->get();
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

        $this->data['catslug'] = 'dich-vu/'.$slug;
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
}
