<?php

class Home extends Route{
    
    public function index(){
        $this -> bind('/home/default');
    }
    
    public function kontak()
    {
        $this -> bind ('/home/kontak');
    }
    
    public function about()
    {
    }
    
}
