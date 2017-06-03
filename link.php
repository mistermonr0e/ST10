<?php
$servername = "localhost";
$username = "root";
$password = "Doggie97.";
$dbname = "event";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>