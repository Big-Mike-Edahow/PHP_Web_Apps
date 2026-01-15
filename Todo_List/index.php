<?php
# index.php

# Set page title and display header section.
$page_title = "Home";
include ("header.html");

# Display main section.
echo '<main><section class="container">';
echo '<form method="POST" action="add_todo.php">';
echo '<label>Add Todo: ';
echo '<input type="text" name="todo" placeholder="Todo..." required>';
echo '</label>';
echo '<input type="submit" value="Add">';
echo '</form><br><br>';

# Connect to the database.
require ("config.php");

# SQL query to select data from the todo table.
$sql = "SELECT id, todo, created FROM $table_name";
$result = $conn->query($sql);

# Display the todos in an HTML table.
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<thead>";
    echo "<tr><th>ID</th><th>Todo</th><th>Created</th></tr>";
    echo "</thead>";
    echo "<tbody>";
    # Output data of each row.
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["todo"] . "</td>";
        echo "<td>" . $row["created"] . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
} else {
    echo "<p>There are no todos to display.</p>";
}

# Close database connection.
$conn->close();

# Display footer section.
include("footer.html");
?>
