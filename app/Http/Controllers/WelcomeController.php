<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class WelcomeController extends Controller
{
    public function index(){
     
        \Message::messages('Hola Mundo','info');
        \Message::messages('Hola Mundo','success');
        \Message::messages('Hola Mundo','error');
        
        $messages = \Message::render();
        //$data = \Assets::dump(['hola' => '97697967', '2' => '334456757', 'index' =>'12312312']);
        $saludo = \Assets::getHolaMundo('Jose Manuel Chavez Rodriguez');
        return \View('Welcome/index', ['saludo' => $saludo]);
    }
}
