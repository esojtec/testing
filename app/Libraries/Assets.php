<?php
namespace App\Libraries;

class Assets {
    public function dump($var){
        
        echo '<pre>';
        print_r($var);
        echo '</pre>';
        
        return null;
    }
}