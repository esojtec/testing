<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WelcomeController extends Controller
{
    public function index(){
        \Messages::success('Mensaje 1');
        \Messages::info('Mensaje 2');
        \Messages::error('Mensaje 3');
        \Messages::warning('Mensaje 4');

        //$data = \Assets::dump(['hola' => '97697967', '2' => '334456757', 'index' =>'12312312']);
        $saludo = \Assets::getHolaMundo('Jose Manuel Chavez Rodriguez');
        return \View('Welcome/index', ['saludo' => $saludo]);
    }
}
