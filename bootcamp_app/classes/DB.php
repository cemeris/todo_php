<?php
class DB {
    protected $conn;
    protected $table;

    public function __construct($table_name) {
        $this->table = $table_name;
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "test";

        // Create connection
        $this->conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function __destruct() {
        $this->conn->close();
    }

    public function get() {
        $sql = "SELECT * FROM `$this->table`";
        $result = $this->conn->query($sql);
        
        if ($result) {
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo json_encode($row) . "<br>";
            }
          } else {
            echo "0 results";
          }
        }
        else {
          echo "Result is wrong";
        }
    }

    public function set($columns, $values) {
      $sql = "INSERT INTO `$this->table` ($columns) VALUES ($values)";
      $result = $this->conn->query($sql);
    
      if ($result === true) {
        echo "ieraksts pievienots";
      }
      else {
        echo "neizdevās";
      }
    }
}