<?php
# index.php
# Hello World

# Set page title and display header section.
$page_title = "Home";
include ("header.html");

echo '<main>';
echo '<section class="index-container">';
echo '<h1>Hello World! 🌎</h1>';
echo '<br>';
echo '<figure>';
echo '<img src="./images/Hello_World.jpg" width="480px" height="200px" alt="Planet Earth">';
echo '</figure>';
echo '</section>';
echo '</main>';

# Display footer section.
include ("footer.html");
?>
