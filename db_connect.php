<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$database = "PlantCreche"; 

$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optionally, you can set the character set
$conn->set_charset("utf8mb4");

?>
