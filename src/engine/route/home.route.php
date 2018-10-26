<?php

class Home extends Route{
    
    public function index(){
        $this -> bind('/home/default');
    }    
}
