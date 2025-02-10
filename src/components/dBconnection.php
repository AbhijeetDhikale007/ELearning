<?php
$servername = "localhost";  // IP Address To Connect To The Database
$username = "root";
$password = "";
$dbname = "elearning"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>