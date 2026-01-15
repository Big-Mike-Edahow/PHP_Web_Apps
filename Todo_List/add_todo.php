<?php
# add_todo.php

# Set page title and display header section.
$page_title = "Post Error";
include ("header.html");

# Check form submitted.
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  # Make sure a todo has been entered.
  if (empty($_POST['todo'])) { echo '<p>Please enter a todo.</p>'; }

  # On success, add todo to the todos table.
  if(!empty($_POST['todo']))
  {
    # Open database connection.
    require ("config.php");
    
    $todo = $_POST['todo'];
    # SQL INSERT statement with placeholder (?).
    $sql = "INSERT INTO todos (todo) VALUES (?)";

    # Prepare the statement and bind the parameter (s = string).
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $todo);

    # Execute the statement.
    if ($stmt->execute()) {
        header("Location: index.php?status=success");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    # Close statement and connection.
    $stmt->close();
    $conn->close();
  }
}

# Create a hyperlink back to the post page.
echo '<br><button id="back-button">Go Back 🔙</button>';
 
# Display footer section.
include ("footer.html") ;
?>
