<?php
$servername = "localhost";
$username = "root";
$password = "usbw";
$database_used = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $database_used);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>