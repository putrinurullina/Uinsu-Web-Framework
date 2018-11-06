<?php

class Route{
    public function bind($blade, $data = [])
    {
        require_once 'engine/bind/'.$blade.'.bind.php';    
    }
    
    public function randomString($length)
    {
     $data['string'] = str_shuffle(BASE_STRING_64);
    return $length;
    }
    
    public function checkEmail()
    {
        
    }
    
    public function tesFungsi(){
        echo "Tes fungsi";
    }
}
