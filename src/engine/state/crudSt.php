<?php

class crudSt{
  
 private $tbl = 'tbl_mahasiswa';
 private $st;

  public function __construct()
  {
   $this -> st = new state;
  }

  public function mhsDataAll()
  {
   $this -> st -> query(DB_SELECT."* FROM " . $this -> tbl);
   return $this -> st -> queryAll();

  }

  public function mhsDetail($nim)
  {
  	$this -> st -> query(DB_SELECT." * FROM ". $this -> tbl." WHERE nim='$nim';");
  	return $this -> st -> querySingle();
  }



}
