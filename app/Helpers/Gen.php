<?php
namespace App\Helpers;
use App\Models\Options\GeneralOption as GeneralOption;
use App\Models\Media\Media as Media;
class Gen{
    /**
     * 
     * @param type $key
     * @return type
     */
    function recursiveTree($data, $node=null, $para = array()) {
        $array = array();
        if(!isset($para['id'])){
            $para['id']='id';
        }
        if(!isset($para['name'])){
            $para['name']='name';
        }
        if(!isset($para['parent'])){
            $para['parent']='parent';
        }
        if(!isset($para['children'])){
            $para['children']='children';
        }
        if(!isset($para['output'])){
            $para['output']=0;
        }
        if ($data) {
            foreach ($data as $item) {
                if($node){
                    if($node[$para['id']]==$item[$para['parent']]){
                        $item[$para['children']] = self::recursiveTree($data,$item,$para);
                        array_push($array,$item);
                    }
                }else{
                    if(!$item[$para['parent']]){
                        $item[$para['children']] = self::recursiveTree($data,$item,$para);
                        array_push($array,$item);
                    }
                }
            }
        }
        if(!$para['output']){
            return $array;
        }
        return self::genTree($array,$para['output']);
    }
    /**
     * 
     */
    function genTree($data,$output) {
        
    }
    /**
     * 
     * @param type $key
     * @return type
     */
    function genOpt($key = '') {
        $data = GeneralOption::wherename($key)->wherelang(getLang())->first();
        if ($data) {
            return $data->val;
        }
        return $key;
    }
    /**
     * 
     * @param type $key
     * @return type
     */
    function genImgUrl($fullpath = '') {
        $arrpath = explode('/',$fullpath);
        if(array_key_exists(1,$arrpath)){
            if($arrpath[1]=='images'){
                $arrpath[1]='img';
            }
        }
        $path = implode('/', $arrpath);
        return $path;
    }
    
    /**
     * 
     * @param type $key
     * @return type
     */
    function getMedia($type,$objid) {
        $media = Media::wheretype($type)->whereid_obj($objid)->get();
        if ($media) {
            return $media;
        }
        return false;
    }
}