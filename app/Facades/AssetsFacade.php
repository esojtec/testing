<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class AssetsFacade extends Facade{
    
    protected static function getFacadeAccessor(){
        return 'assets';
    }
}
