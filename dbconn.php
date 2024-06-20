<?php
$servername = "localhost";
$username = "root";  // change this to your database username
$password = "mariamkupi2#";  // change this to your database password
$dbname = "quickbite";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}