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

// sql to create table
$sql = "CREATE TABLE bdunad35 (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nameprod VARCHAR(30) NOT NULL,
    brandProd VARCHAR(30) NOT NULL,
    Price INT(50),
    Quantity INT(6)
    )";
    if (mysqli_query($connection, $sql)) {
    echo "Table MyGuests created successfully";
    } else {
    echo "Error creating table: " . mysqli_error($connection);
    }
    mysqli_close($connection);

?>