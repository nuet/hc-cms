<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Menu;

abstract class Controller extends BaseController {

    use DispatchesCommands,
        ValidatesRequests;

    public function __construct() {
        $this->data['mtop'] = Menu\Menu::where('menu_status', 1)->where('menu_position','=','top')->wherelang(getLang())->orderBy('menu_order')->get();
        $this->data['mbotton'] = Menu\Menu::where('menu_status', 1)->where('menu_position', '=', 'bottom')->GetNested('bottom');
    }
}