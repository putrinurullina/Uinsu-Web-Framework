<?php
/**
* route core file
*
*
*/

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
   
    }        
    
    public function upload()
    {
        
    }
    
    public function sendEmail()
    {
    
    }
    
    public function getApi()
    {
        
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
