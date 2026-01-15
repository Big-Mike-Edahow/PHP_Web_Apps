<?php
# config.php
# Database Configuration

$servername = "localhost";
$username = "mike"; // Replace with your MySQL username
$password = "5454160s"; // Replace with your MySQL password
$dbname = "php_web_apps"; // Replace with your database name
$table_name = "todos"; // Replace with your table name

// 1. Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
