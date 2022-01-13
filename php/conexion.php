<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$bdname = "bdunad35";

// Create connection
$connection = mysqli_connect($servername, $username, $password, $bdname);
// Check connection
if (!$connection) {
die("Connection failed: " .mysqli_connect_error());
}
//echo "Connected successfully";