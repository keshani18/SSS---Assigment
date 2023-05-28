<?php

$host = "localhost";
$username = "root";
$password = "";
$db_name = "cyber-store";


$conn = new mysqli($host, $username, $password, $db_name);

if($conn->connect_error){
    die("Database not connected: " . $conn->connect_error);
}

?>