<?php

namespace App\Models\Menu;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model {
    //
    protected $table = 'menu';
    protected $fillable = ['menu_name', 'menu_slug', 'menu_type', 'menu_status', 'menu_position', 'menu_order', 'menu_parent', 'lang'];
}