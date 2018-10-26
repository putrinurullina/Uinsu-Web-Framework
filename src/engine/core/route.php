<?php

class Route{
    public function bind($blade, $data = [])
    {
        require_once 'engine/bind/'.$blade.'.bind.php';    
    }
    
    public function tesFungsi(){
        echo "Tes fungsi";
    }
}
