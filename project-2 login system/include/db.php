<?php
// Database connection parameters
$servername = "localhost";
$db_username = "root"; // replace with your database username
$db_password = ""; // replace with your database password
$dbname = "php_projects";

// Create connection
$conn = mysqli_connect($servername, $db_username, $db_password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>