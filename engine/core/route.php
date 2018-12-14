<?php
/**
* Uinsu Web Framework
* Small, Fast, & Secure Web Framework
* Based on PHP
* Thanks for support
* Muhammad Ikhsan, ST. M.Kom (Pembina Haxors Programming Club)
* Muhammad Furqan, S.Si, Sc, M.Comp (Ketua Prodi Ilmu Komputer UINSU)
* 
* @package	Uinsu Web Framework
* @author	Haxors Programming Club
* @link	http://haxorsprogrammingclub.id
* @since	Version 3.5
*/


/**
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
    
    public function upload($path)
    {
        $data['path'] = $data -> path($path);
        if(move_uploaded_file()){
        
        }else{
        
        }
    }
    
    public function sendEmail()
    {
    $data['mailId'] = $this -> inputPost('mailId');
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
