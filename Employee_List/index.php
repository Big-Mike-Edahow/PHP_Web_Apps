<?php
# index.php
# PHP Employee List

# Set page title and display header section.
$page_title = "Home";
include ("header.html");

echo '<main>';
echo '<section class="container">';
echo '<h1 class="headline-h1">Employee Details 👤</h1><br>';
echo '<a class="button" href="create.php">Add New Employee</a><br>';

# Open the connection to the database.
require_once "config.php";

# Query the employees table.
$sql = "SELECT * FROM $table_name";

if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table><thead>";
        echo "<tr><th>#</th>";
        echo "<th>Name</th>";
        echo "<th>Address</th>";
        echo "<th>Salary</th>";
        echo "<th>Action</th></tr>";
        echo "</thead><tbody>";
        
        while($row = mysqli_fetch_array($result)){
            echo "<tr><td>" . $row['user_id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "<td>" . $row['salary'] . "</td>";
            echo "<td><form action='delete.php' method='POST'>";
            echo "<input type='hidden' name='user_id' value=" . $row['user_id'] . '">';
            echo "<input id='delete-btn' type='submit' value='Delete'>";
            echo "</td></form></tr>";
        }
        
        echo "</tbody></table>";

        # Free the result set.
        mysqli_free_result($result);

    } else{
        echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
    }
} else{
    echo "Oops! Something went wrong. Please try again later.";
    }
 
# Close database connection
mysqli_close($conn);

echo '</section>';
echo '</main>'
?>
