<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Menu;
use App\Models\Category;
use App\Models\News;
use Config,Gen;

abstract class Controller extends BaseController {

    use DispatchesCommands,
        ValidatesRequests;

    public function __construct() {
        $this->data['mtop'] = Menu\Menu::where('menu_status', 1)->where('menu_position','=','top')->wherelang(getLang())->orderBy('menu_order')->get();
        $this->data['mbotton'] = Menu\Menu::where('menu_status', 1)->where('menu_position', '=', 'bottom')->GetNested('bottom');
        //Anh quang cao ben trai
        $arrPic = Gen::getMedia(Config::get('constants.mediatype.slide'),'2');
        $this->data['leftPath'] = $arrPic[0]->path_full;
        $this->data['leftPathGo'] = $arrPic[0]->img_url;
        //Anh quang cao ben phai
        $arrPic = Gen::getMedia(Config::get('constants.mediatype.slide'),'10');
        $this->data['rightPath'] = $arrPic[0]->path_full;
        $this->data['rightPathGo'] = $arrPic[0]->img_url;
        //Chuyen muc dich vu
        $slugcat = 'dich-vu';
        $findcat = Category\Category::where('slug', $slugcat)->first();
        $this->data['services'] = Category\Category::where('status','=','1')->where('parent','=',$findcat['id'])->orderBy('order')->get();
        //Tin hoat dong tren trang chu
        $slugcat = 'tin-tuc';
        $findcat = Category\Category::where('slug', $slugcat)->first();
        $this->data['news'] = News\News::where('status','=','1')->where('id_category','=',$findcat['id'])->orderBy('order')->get();
    }
}