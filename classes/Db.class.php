<?php

class Db{

  private $servername;
  private $database;
  private $username;
  private $password;

  public function connect(){
    $this->servername = "tcp:cloudymousappserv.database.windows.net,1433";
    $this->database = "dicodingdb";
    $this->username = "cloudymous";
    $this->password = "imran*01";

  try{
    $dsn = "sqlsrv:server=" .$this->servername. "; Database =" .$this->database;
    $conn = new PDO( $dsn, $this->username, $this->password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
  } catch(PDOException $e){
    echo "ERROR: Could not connect. " . $e->getMessage();
  }
}

}
