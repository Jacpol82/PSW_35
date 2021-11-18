<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
// Create connection
$connection = mysqli_connect($servername,
$username, $password);
// Check connection
if (!$connection) {
die("Connection failed: " .
mysqli_connect_error());
}
echo "Connected successfully";

// Create database
$sql = "CREATE DATABASE bdunad35";
if (mysqli_query($connection, $sql)) {
echo "Database created successfully";
} else {
echo "Error creating database: " . mysqli_error($conn);
}
mysqli_close($conn);
?>