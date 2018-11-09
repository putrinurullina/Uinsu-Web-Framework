<?php

class Route{
    public function bind($blade, $data = [])
    {
        require_once 'engine/bind/'.$blade.'.bind.php';    
    }

    public function state($state)
    {
        require_once 'engine/state/'.$state.'.php';
        return new $state;
    }
    
    public function randomString($length)
    {
     $data['string'] = str_shuffle(BASE_STRING_64);
    return $length;
    }
    
    public function checkEmail($email)
    {
        
    }
    
    public function tesFungsi(){
        echo "Tes fungsi";
    }
}
