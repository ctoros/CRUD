<?php
  class DataBase{

    public $servername = "localhost";
    public $username = "clase1";
    public $password = "admin";
    public $dbname = "clase1";

    public function connect(){
      $conn =  new mysqli(
                    $this->servername,
                    $this->username,
                    $this->password,
                    $this->dbname
                  );
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
          return FALSE;
      }     
      return $conn;
    }

  }

?>
