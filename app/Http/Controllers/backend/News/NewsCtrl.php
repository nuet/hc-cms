<?php

namespace App\Http\Controllers\backend\News;

use App\Http\Requests\backend\News\NewsRequest;
use App\Http\Controllers\Controller;
use App\Models\News\News;
use App\Models\Media\Media;
use App\Models\Category\Category;
use Config,DB,Request,Storage,Entrust;

class NewsCtrl extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function __construct() {
        $this->data['title'] = ucfirst(trans('sidebar.news'));
    }

    public function index() {
        //
        if (!Entrust::can('post-read')) {
            return redirect('');
        }
        $this->data['sub_title'] = ucfirst(trans('sidebar.list')).' '.trans('sidebar.news');
        return view('backend.news.index', $this->data);
    }

    public function getNews() {
        $data = News::DtNews();
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        //
        if (!Entrust::can('post-create')) {
            return redirect('');
        }
        
        $this->data['sub_title'] = ucfirst(trans('sidebar.addnew')).' '.trans('sidebar.news');
        $this->data['type'] = Config::get('constants.newsviewtype');
        $this->data['category'] = Category::where('status', 1)->lists('name', 'id');
        return view('backend.news.create', $this->data);
    }

    /**ad
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(NewsRequest $request) {
        //
        try {
            $input = $request->except('_token');
            $input['status'] = $request->get('status') == 'on' ? 1 : 0;
            $input['features'] = implode(',', $input['features']);
            $input['lang'] = getLang();
            $news = new News($input);
            $news->save();
        } catch (Exception $exc) {
            $message = $e->getMessage();
        }
        if (isset($message)) {
            return redirect()->back()->withInput()->withErrors(['message' => $message]);
        }
        return langRedirectRoute('backend.news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
        dd(1);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
        if (!Entrust::can('post-update')) {
            return redirect('');
        }
        $this->data['sub_title'] = ucfirst(trans('sidebar.edit')).' '.trans('sidebar.news');
        $this->data['type'] = Config::get('constants.newsviewtype');
        $this->data['post'] = News::find($id);
        $this->data['category'] = Category::where('status', 1)->lists('name', 'id');
        return view('backend.news.edit', $this->data);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(NewsRequest $request, $id) {
        $input = $request->all();
        $input['status'] = $request->get('status') == 'on' ? 1 : 0;
        $input['features'] = implode(',', $input['features']);
        $input['lang'] = getLang();
        $post = News::find($id);
        if ($post->update($input)) {
            return langRedirectRoute('backend.news.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
        if (!Entrust::can('post-delete')) {
            return response()->json(['success' => FALSE]);
        }
        $news = News::find($id);
        if ($news->delete()) {
            return response()->json(['success' => TRUE]);
        }
    }
}