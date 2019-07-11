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
      $this->host=$host;
      $this->database=$database;
      $this->user=$user;
      $this->pass=$pass;
  }

  public function connect()
  {
    $link = new PDO("sqlsrv:server = \"$this->$host\"; Database = \"$this->$database\"", $this->$user, $this->$pass);
    $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $link
  }

}

?>
