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
   $this -> st -> query(DB_SELECT."* FROM " . $this -> tbl);
   return $this -> st -> queryAll();

  }

  public function mhsDetail($nim)
  {
    $this -> st -> query('SELECT * FROM '. $this -> tbl . ' WHERE nim=:nim');
    $this -> st -> querySet('nim',$nim);
    return $this -> st -> querySingle(); 
  }

  public function tambahData()
  {
    $nama = "Adit";
    $nim = "0701163112";
    $email = "adit@gmail.com";

    $query = DB_INSERT.$this -> tbl ." VALUES ('',:nim,:nama,:email);";

    $this -> st -> query($query);
    $this -> st -> querySet('nim',$nim);
    $this -> st -> querySet('nama',$nama);
    $this -> st -> querySet('email',$email);
    $this -> st -> queryRun();    
  }
  
  
}
