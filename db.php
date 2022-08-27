<?php

// Server name must be localhost
$servername = "localhost";

// In my case, user name will be root
$username = "root";

// Password is empty
$password = "";

// Creating a connection
$conn = new mysqli($registrations,
      $shp, $12345678);

// Check connection
if ($conn->connect_error) {
  die("Connection failure: "
    . $conn->connect_error);
}

// Creating a database named registrations
$sql = "CREATE DATABASE registrations";
if ($conn->query($sql) === TRUE) {
  echo "Database with name registrations";
} else {
  echo "Error: " . $conn->error;
}

// Closing connection
$conn->close();
?>
