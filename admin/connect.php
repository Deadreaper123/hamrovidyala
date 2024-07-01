<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = ""; // Assuming no password for root, change if necessary
$dbname = "user"; // Ensure this is the correct database name

// Connect to the database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
