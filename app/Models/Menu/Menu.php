<?php

namespace App\Models\Menu;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model {
    //
    protected $table = 'menu';
    protected $fillable = ['menu_name', 'menu_slug', 'menu_type', 'menu_status', 'menu_position', 'menu_order', 'menu_parent', 'lang'];

    public function children() {
        return $this->hasMany('App\Models\Menu\Menu', 'menu_parent', 'id');
    }

    public function scopeGetNested($query, $position) {
        $pages = $query->with('children')->where('menu_position', $position)->orderBy('menu_order')->get()->toArray();
        $i = 0;
        $array = array();
        if ($pages) {
            foreach ($pages as $page) {
                if ($page['menu_parent'] == 0) {
                    $array[$page['id']] = $page;
                }
                $i++;
            }
        }
        return $array;
    }
}