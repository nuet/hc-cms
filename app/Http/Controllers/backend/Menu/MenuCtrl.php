<?php

namespace App\Http\Controllers\backend\Menu;

use App\Http\Controllers\Controller;
use App\Http\Requests\backend\Menu\MenuRequest;
use App\Models\Menu\Menu;
use App\Models\Category\Category;
use DB,Request,Entrust,Gen;

class MenuCtrl extends Controller {

    public function __construct() {
        $this->data['title'] = 'Menu';
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        //
        if (!Entrust::can('menu-read')) {
            return redirect('');
        }
        $this->data['sub_title'] = ucfirst(trans('sidebar.list')).' '.trans('sidebar.menu');
        return view('backend.menu.index', $this->data);
    }

    public function getMenu($position = '') {
        if (Request::isMethod('post')) {
            //
            $data = Request::get('data');
            $position = Request::get('position');
            self::update_menu($data,0);
            return response()->json(['success' => TRUE]);
        }
        $data = Menu::wheremenu_position($position)->wherelang(getLang())->orderBy('menu_order')->get();
        $arrPara = array('parent'=>'menu_parent');
        $this->data['menu'] = Gen::recursiveTree($data,null,$arrPara);
        
        return view('backend.menu.lists', $this->data);
    }
    /**
     * 
     * @param type $data
     */
    private function update_menu($data,$parent_id){
        foreach ($data as $key => $val) {
                $menu = Menu::find($val['id']);
                $menu->menu_order = $key;
                $menu->menu_parent = $parent_id;
                $menu->lang = getLang();
                $menu->save();
                if (isset($val['children'])) {
                    self::update_menu($val['children'],$val['id']);
                }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        //
        if (!Entrust::can('menu-create')) {
            return redirect('');
        }
        $this->data['sub_title'] = ucfirst(trans('sidebar.add')).' '.trans('sidebar.menu');
        $this->data['position'] = Request::get('position');
        $this->data['parent'] = Menu::where('menu_position', Request::get('position'))
                ->where('menu_parent', '=', 0)
                ->lists('menu_name', 'id');
        return view('backend.menu.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(MenuRequest $request) {
        //
        $input = $request->all();
        if($input['menu_type']=='category'){
            $parent = $input['menu_parent'];
            $datacat = json_decode($input['datacat']);
            $status = $request->get('menu_status') == 'on' ? 1 : 0;
            $menu_position = $input['menu_position'];
            self::store_cat_menu($datacat,$parent,$status,$menu_position);
            return langRedirectRoute('backend.menu.index');
        }else{
            $input['menu_status'] = $request->get('menu_status') == 'on' ? 1 : 0;
            $input['lang'] = getLang();
            $menu = new Menu($input);
            if ($menu->save()) {
                return langRedirectRoute('backend.menu.index');
            };
        }
    }

    private function store_cat_menu($data,$parent_id,$status,$menu_position){
        foreach ($data as $key => $val) {
            $catid = $val->id;
            $category = Category::find($catid);
            $input = array(
                'lang' => getLang(),
                'menu_parent' => $parent_id,
                'menu_name' => $category->name,
                'menu_slug' => $category->slug,
                'menu_type' => 'category',
                'menu_order' => $key,
                'menu_position' => $menu_position,
                'menu_status' => $status
            );
            $menu = new Menu($input);
            if ($menu->save()) {
                $id = $menu->id;
                if (isset($val->children)) {
                    self::store_cat_menu($val->children,$id,$status,$menu_position);
                }
            };
        }
        return true;
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
        if (!Entrust::can('menu-update')) {
            return redirect('');
        }
        $this->data['sub_title'] = ucfirst(trans('sidebar.edit')).' '.trans('sidebar.menu');
        $this->data['position'] = Request::get('position');
        $this->data['menu'] = Menu::find($id);
        $this->data['parent'] = Menu::where('id', '!=', $id)->where('menu_position', Request::get('position'))
                ->where('menu_parent', '=', 0)
                ->lists('menu_name', 'id');
        return view('backend.menu.edit', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(MenuRequest $request, $id) {
        //
        $input = $request->all();
        $input['menu_status'] = $request->get('menu_status') == 'on' ? 1 : 0;
        $input['lang'] = getLang();
        $menu = Menu::find($id);
        if ($menu->update($input)) {
            return langRedirectRoute('backend.menu.index');
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
        if (!Entrust::can('menu-delete')) {
            return response()->json(['success' => FALSE]);
        }
        $menu = Menu::find($id);
        if ($menu->delete()) {
            $menu->where('menu_parent', $id)->update(['menu_parent' => 0]);
            return response()->json(['success' => TRUE]);
        }
    }
}
