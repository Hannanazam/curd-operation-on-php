<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "learning_php_curd";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>