<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ajaxphp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//set charset to utf-8
mysqli_set_charset($conn,"utf8");


?>