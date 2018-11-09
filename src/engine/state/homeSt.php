<?php

class homeSt{
  
 private $tbl = 'mhs';
 private $st;

 public function __construct()
 {
  $this -> st = new state;
 }
 

  public function mhsData()
  {
   $this -> st -> query("SELECT * FROM " . $this -> tbl);
   return $this -> st -> queryAll();

  }
  
  
}
