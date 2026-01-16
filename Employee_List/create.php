<?php
# create.php
# Add New Employee Record

# Set page title and display header section.
$page_title = "Add Employee";
include ("header.html");

echo '<main>';
echo '<section class="container">';
echo '<h2>Create New Employee Record ✍️</h2><br><br>';
echo '<form action="add_employee.php" method="post">';
echo '<fieldset>';
echo '<legend>Add Employee</legend>';
echo '<p><label for="name">Name: </label>';
echo '<input type="text" name="name" required></p>';
echo '<p><label for="address">Address: </label>';
echo '<textarea name="address" required></textarea></p>';
echo '<p><label for="salary">Salary: </label>';
echo '<input type="number" name="salary" required></p><br>';
echo '<input type="submit" value="Submit">';
echo '</fieldset>';
echo '</form>';
echo '</section>';
echo '</main>';
?>
