<?php

class home{
  private $tbl = "tbl_usr_profile";
  private $db;
  
  public function __construct()
  {
    $this -> db = new State;
  }
  
  public function getDataMahasiswa()
  {
  $this -> db -> getAllMahasiswa();
  }
  
}
