<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WelcomeController extends Controller
{
    public function index(){
        \Message::message('Mensaje 1','info');
        \Message::message('Mensaje 1','success');

        $message = \Message::render();

        //$data = \Assets::dump(['hola' => '97697967', '2' => '334456757', 'index' =>'12312312']);
        $saludo = \Assets::getHolaMundo('Jose Manuel Chavez Rodriguez');
        return \View('Welcome/index', ['saludo' => $saludo, 'message' => $message]);
    }
}
