<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Page;
use App\Models\Users\User;

abstract class Controller extends BaseController {

    use DispatchesCommands,
        ValidatesRequests;

    public function __construct() {
        $this->data['mtop'] = Page\Page::where('page_status', 1)->wherelang(getLang())->wherepage_position('top')->GetNested('top');
    }
}