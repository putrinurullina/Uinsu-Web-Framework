<?php


class Database{
  
  private $host = DB_SERVER;
  private $user = DB_USERNAME;
  private $password = DB_PASSWORD;
  private $dbName = DB_NAME;
  
  private $dbh;
  private $qDb;
  
  public function __constuct()
  {
    $dsn = 'mysql:host='.$this->host.';dbname:='.$this->dbName;
    $option = [
      PDO::ATTR_PERSISTENT => true,
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];
    
    try{
      $this -> dbh = new PDO($dsn, $this -> user , $this -> password);
    }catch(PDOexception $e){
      die($e -> getMessage());
    }
    
  }
  
  public function query($query)
  {
    $this -> qDb = $this -> dbh -> prepare($query);
  }
  
  public function bind($param, $value, $type = null)
  {
    if(is_null($type)){
      switch(true){
        case is_int($value):
          $type = PDO::PARAM_INT;
          break;
        case is_bool($value):
          $type = PDO::PARAM_BOOL;
          break;
        case is_null($value):
          $type = PDO::PARAM_NULL;
          break;
        default:
          $type = PDO::PARAM_STR;
      }
    }
    $this -> qDb -> bindValue($param, $value, $type);
  }
  
  public function eDb()
  {  
    $this -> qDb -> execute();
  }
  
  public function qAll (){
    $this -> eDb();
    return $this -> qDb -> fetchAll(PDO::FETCH_ASSOC);
  }
  
  public function qSingle()
  {
    $this -> eDb();
    return $this -> qDb -> fetch(PDO::FETCH_ASSOC);
  }
  
}
