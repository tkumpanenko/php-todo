<?php

Class Database{

  function __construct(){

  }

  private function connect(){
    // Create connection
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }else{
      echo "Connected successfully";
    }
  }

}