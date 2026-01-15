<?php
# config.php
# Database Configuration

$servername = "localhost";
$username = "foo";
$password = "bar";
$dbname = "php_web_apps";
$table_name = "todos";

# Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

# Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
