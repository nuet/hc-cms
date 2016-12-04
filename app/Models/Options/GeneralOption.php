<?php

namespace App\Models\Options;

use Illuminate\Database\Eloquent\Model;

class GeneralOption extends Model {
    //
    protected $table = 'option';
    protected $fillable = ['name', 'value', 'lang'];
}