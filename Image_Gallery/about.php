<?php
# about.php

# Set page title and display header section.
$page_title = "About";
include ("header.html");

echo '<main>';
echo '<section class="center">';
echo '<h1 class="headline-h1">About Big Mike! 👷</h1><br><br>';
echo '</section>';
echo '<section class="about-container">';
echo '<figure>';
echo '<img src="./site_images/Big_Mike.jpg" width="350px" alt="Big Mike">';
echo '<figcaption>Big Mike! 😎</figcaption>';
echo '</figure>';
echo '<figure>';
echo '<img src="./site_images/Trane_Tech.jpg" width="350px" alt="Trane Tech">';
echo '<figcaption>Trane Tech. 🚂</figcaption>';
echo '</figure>';
echo '<figure>';
echo '<img src="./site_images/Shipping_Dept.jpg" width="350px" alt="Shipping Dept.">';
echo '<figcaption>Shipping Dept. 🚢</figcaption>';
echo '</figure>';
echo '</section>';
echo '</main>';

# Display footer section.
include ("footer.html");
?>
