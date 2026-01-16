<?php
# config.php
# Database Configuration

$servername = "localhost";
$username = "mike";
$password = "5454160s";
$dbname = "php_web_apps";
$table_name = "employees";

# Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

# Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
