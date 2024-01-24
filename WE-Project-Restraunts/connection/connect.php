<?php

// Main connection file for both admin & front end
$servername = "localhost";  // Server
$port = 3307;              // Port number
$username = "root";         // Username
$password = "";             // Password
$dbname = "onlinefoodphp";  // Database

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname, $port); // Connecting 

// Check connection
if (!$db) { // Checking connection to DB	
    die("Connection failed: " . mysqli_connect_error());
}

?>
