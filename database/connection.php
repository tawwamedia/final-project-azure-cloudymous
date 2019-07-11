<?php

class Database
{
  var $host = "";
  var $user = "";
  var $pass = "";
  var $database = "";

  public $link;

  public function Database($host, $database, $user, $pass)

  {
    try{
      $link = new PDO("sqlsrv:server =" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
      $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
      die("ERROR: Could not connect. " . $e->getMessage());
    }

    return $link
  }

}

?>
