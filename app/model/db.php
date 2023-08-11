<?php


class db {

  public $conn;

  

  public function __construct()
  {
    $servername = "localhost";
    $username = "root";
    $password = "abcxyz";

    // Create connection
    $this->conn = new mysqli($servername, $username, $password,'mvcdata');

    // Check connection
    if ($this->conn->connect_error) {
      die("Connection failed: " . $this->conn->connect_error);
    }
    
  }
  

}

 