<?php
# add_employee.php

# Open the connection to the database.
require_once "config.php";

# Check if form data has been posted.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $address = htmlspecialchars($_POST['address']);
    $salary = htmlspecialchars($_POST['salary']);

    # Prepare an INSERT statement with placeholders.
    $sql = "INSERT INTO employees (name, address, salary) VALUES (?, ?, ?)";

    if ($stmt = mysqli_prepare($conn, $sql)) {
        # Bind statement parameters ("ssd" - string, string, decimal).
        mysqli_stmt_bind_param($stmt, "ssd", $name, $address, $salary);

        # Attempt to execute the prepared statement.
        if (mysqli_stmt_execute($stmt)) {
            header("Location: index.php?status=success");
            exit();
        } else {
            echo "Error: Could not execute statement. " . mysqli_error($conn);
        }

        # Close statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Error: Could not prepare statement. " . mysqli_error($conn);
    }
}

# Close connection
mysqli_close($conn);
?>
