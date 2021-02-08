<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

getData($conn);
//setData($conn);

function getData($conn) {
  $sql = "SELECT id, model, color FROM cars";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["id"]. " - Name: " . $row["model"]. " " . $row["color"]. "<br>";
    }
  } else {
    echo "0 results";
  }
}

function setData($conn) {
  $sql = "INSERT INTO cars (model, color) VALUES ('volkswagen', 'green')";
  $result = $conn->query($sql);

  if ($result === true) {
    echo "ieraksts pievienots";
  }
  else {
    echo "neizdevās";
  }
}


$conn->close();

?>