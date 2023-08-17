<?php
$servername = "localhost";
$username = "u246504064_thesis";
$password = "ThesisFinal789";
$dbname = "u246504064_malagasang";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>