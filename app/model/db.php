<?php


class db {

  public $conn;

  

  public function __construct()
  {
   

    // Create connection
    $this->conn = new mysqli($GLOBALS['host'], $GLOBALS['user'], $GLOBALS['password'], $GLOBALS['dbname']);

    // Check connection
    if ($this->conn->connect_error) {
      die("Connection failed: " . $this->conn->connect_error);
    }
    
  }
  

}

 