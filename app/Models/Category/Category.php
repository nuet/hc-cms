<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Model;
use DB;

class Category extends Model {

    //
    protected $table = 'category';
    protected $fillable = ['name', 'parent', 'order', 'slug', 'status', 'viewhome', 'lang'];

    public function children() {
        return $this->hasMany('App\Models\Category\Category', 'parent', 'id');
    }

    public function scopeGetNested($query) {
        $pages = $query->with('children')->wherelang(getLang())->orderBy('order')->get()->toArray();
        $i = 0;
        $array = array();
        if ($pages) {
            foreach ($pages as $page) {
                if ($page['parent'] == 0) {
                    $array[$page['id']] = $page;
                }
                $i++;
            }
        }
        return $array;
    }

    public function scopeGetSelectCat($query) {
        $cats = $this->where('parent','=', 0)->wherestatus(1)->wherelang(getLang())->orderBy('order')->get()->toArray();
        $array = array();
        if ($cats) {
            foreach ($cats as $cat) {
                $ip = array();
                $ip['text'] = $cat['name'];
                $ip['value'] = $cat['id'];
                $arrChildren = self::getChildren($cat);
                if(!empty($arrChildren)){
                    $ip['nodes'] = $arrChildren;   
                }
                array_push($array,$ip);
            }
        }
        return $array;
    }
    
    private function getChildren($cat) {
        $cats = $this->where('parent','=', $cat['id'])->where('status','=',1)->orderBy('order')->get()->toArray();
        $array = array();
        if ($cats) {
            foreach ($cats as $item) {
                $ip = array();
                $ip['text'] = $item['name'];
                $ip['value'] = $item['id'];
                $arrChildren = self::getChildren($item);
                if(!empty($arrChildren)){
                    $ip['nodes'] = $arrChildren;   
                }
                array_push($array,$ip);
            }
        }
        return $array;
    }
}
