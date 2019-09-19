<?php
$servername = "localhost";
$username = "id10919290_teampremiere";
$password = "1234567890";
$database = "id10919290_teampremiere";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
