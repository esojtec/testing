<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WelcomeController extends Controller
{
    public function index(){
        
        $assets = \App::make('Assets');
        
        $data = $assets->dump(['hola' => '97697967', '2' => '334456757', 'index' =>'12312312']);
        //$data = \Assets::dump(['hola' => '97697967', '2' => '334456757', 'index' =>'12312312']);
        
        return \View('Welcome/index', ['data' => $data]);
    }
}
