<?php namespace App\Models\Widget;

use Illuminate\Database\Eloquent\Model;

class Slideshow extends Model {
    //
    protected $table = 'slideshow';
    protected $fillable = ['ss_name','ss_type','ss_status','lang'];

}
