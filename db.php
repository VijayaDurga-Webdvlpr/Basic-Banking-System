<?php
$user = 'root';
$password = 'root';
$db = 'test';
$host = 'localhost';
$port = 3307;

$conn = mysqli_init();
$success = mysqli_real_connect(
   $conn, 
   $host, 
   $user, 
   $password, 
   $db,
   $port
);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>