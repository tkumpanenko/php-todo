<?php

Class Database{

  protected $db;
  protected $todo_table = "tasks";

  function __construct(){
    $this->connect();
    return  $this->db;

  }

  private function connect(){
    // Create connection
    $this->db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);

    // Check connection
    if (!$this->db) 
    {
      return "Connection failed: " . mysqli_connect_error();
    }
    else
    {
      //create db if not exists
      $sql = sprintf('CREATE DATABASE IF NOT EXISTS %s', DB_NAME);
      mysqli_query($this->db, $sql);

      $this->db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

      //create task table if not exists
      $sql = sprintf("CREATE TABLE IF NOT EXISTS %s (id INT NOT NULL AUTO_INCREMENT, title VARCHAR(100), description TEXT, status INT, PRIMARY KEY (ID))", $this->todo_table);
      mysqli_query($this->db, $sql); 
    }

    

  }

  public function add($title, $description, $status = 0){
    $sql = sprintf("INSERT INTO %s (title, description, status) VALUES ('%s', '%s', %s)", $this->todo_table , $title, $description, $status);
    mysqli_query($this->db, $sql);
  }

  public function update($id, $title, $description, $status = 0){
    $sql = sprintf("UPDATE %s SET title = '%s', description = '%s', status = %s) WHERE id = %d", $this->todo_table , $title, $description, $status);
    mysqli_query($this->db, $sql);
  }

  public function delete($id) {
    $sql = sprintf('DELETE FROM %s WHERE id = %d', $this->todo_table , $id);
    mysqli_query($this->db, $sql);
  }

  public function  select_all(){
    $sql = sprintf('SELECT * FROM %s', $this->todo_table);
    $data = mysqli_query($this->db, $sql);
    $rows = array();
    while($r = mysqli_fetch_assoc($data )) {
        $rows[] = $r;
    }
    return $rows;
  }

}