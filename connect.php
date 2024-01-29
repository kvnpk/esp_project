<?php
$servername = "localhost";
$username = "root";
$password = "cdti1234";
$dbname = "db_esp32";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected! ";
?>