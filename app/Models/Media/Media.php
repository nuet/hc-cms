<?php

namespace App\Models\Media;

use Illuminate\Database\Eloquent\Model;
use DB;

class Media extends Model {

    //
    protected $table = 'media';
    protected $fillable = ['id_obj', 'type', 'img_name', 'img_description', 'path_thumb', 'path_full', 'img_url'];

    public function slideshow() {
        return $this->belongsTo('App\Models\Widget\Slideshow', 'id_obj');
    }
}