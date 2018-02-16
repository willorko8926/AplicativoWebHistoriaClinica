<?php
include_once('DataBase.php');

// Define configuration
define("DB_HOST", "ec2-54-163-236-188.compute-1.amazonaws.com");
define("DB_USER", "ppeahbtfrwsikw");
define("DB_PASS", "92778e3c4f13f322d77a3c129e52204ed6f6c0013cd6b4f6ae333ac37d62c660");
define("DB_NAME", "d4mv4chcffaldq");

class Collector extends DataBase
{
  public static $db;
  private $host      = DB_HOST;
  private $username  = DB_USER;
  private $password  = DB_PASS;
  private $dbname    = DB_NAME;
    
  public function __construct()
  {
    self::$db = new DataBase($this->username, $this->password, $this->host, $this->dbname);
  }
}

?>
