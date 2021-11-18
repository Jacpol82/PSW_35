<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$bdname = "bdunad35";

// Create connection
$connection = mysqli_connect($servername,
$username, $password, $bdname);
// Check connection
if (!$connection) {
die("Connection failed: " .
mysqli_connect_error());
}
echo "Connected successfully";

// sql to create table
$sql = "CREATE TABLE tabla35 (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Nombre_Producto VARCHAR(30) NOT NULL,
    Marca_Producto VARCHAR(30) NOT NULL,
    Precio INT(50),
    Cantidad INT(6)
    )";
    if (mysqli_query($connection, $sql)) {
    echo "Table MyGuests created successfully";
    } else {
    echo "Error creating table: " . mysqli_error($connection);
    }
    mysqli_close($connection);

?>