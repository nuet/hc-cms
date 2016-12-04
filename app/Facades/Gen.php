<?php
namespace App\Facades;
 
use Illuminate\Support\Facades\Facade;
 
class Gen extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'gen';
    }
}