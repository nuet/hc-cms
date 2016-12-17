<?php

namespace App\Models\Page;

use Illuminate\Database\Eloquent\Model;

class Page extends Model {

    //
    protected $table = 'pages';
    protected $fillable = ['page_name', 'page_slug', 'page_status', 'page_order', 'page_content', 'lang'];

    public function getPageContentAttribute($value) {
        return str_replace(["\r\n", "\n", "\r"],'&nbsp;',$value);
        
    }

    public function scopeGetNested($query) {
        $pages = $query->wherelang(getLang())->orderBy('page_order')->get()->toArray();
        $i = 0;
        $array = array();
        if ($pages) {
            foreach ($pages as $page) {
                $array[$page['id']] = $page;
                $i++;
            }
        }
        return $array;
    }

}
