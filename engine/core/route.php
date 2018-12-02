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
    
    public function uploadFoto($path,$newPath)
    {
        move_uploaded_files($path,$newPath);
    }  
    
    public function inputPost($id)
    {
        $id = $_POST[$id];
        return $id;
    }

    public function inputGet($id)
    {
        $id = $_POST[$id];
        return $id;
    }
    
    public function emailCheck($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
          echo("$email is a valid email address");
        } else {
          echo("$email is not a valid email address");
        }
    }
    
}
