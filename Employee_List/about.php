<?php
# about.php
# Hello World

# Set page title and display header section.
$page_title = "About";
include ("header.html");

echo '<main>';
echo '<section class="center">';
echo '<h1>About Big Mike! 👨‍💻</h1><br><br>';
echo '</section>';
echo '<section class="about-container">';
echo '<figure>';
echo '<img src="./images/Big_Mike.jpg" width="400px" alt="Big Mike">';
echo '<figcaption>Big Mike! 😎</figcaption>';
echo '</figure>';
echo '<figure>';
echo '<img src="./images/New_Mexico.jpg" width="400px" alt="New Mexico">';
echo '<figcaption>New Mexico. 🏜️</figcaption>';
echo '</figure>';
echo '</section>';
echo '</main>';

# Display footer section.
include ("footer.html");
?>
