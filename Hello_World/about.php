<?php
# about.php
# Hello World

# Set page title and display header section.
$page_title = "About";
include ("header.html");

echo '<main>';
echo '<section class="center">';
echo '<h1>About Big Mike! 👨‍💻</h1>';
echo '<br>';
echo '</section>';
echo '<section class="about-container">';
echo '<figure>';
echo '<img src="./images/Big_Mike.jpg" width="240px" alt="Planet Earth">';
echo '<figcaption>Big Mike! 😎</figcaption>';
echo '</figure>';
echo '<figure>';
echo '<img src="./images/Eighteen_Wheeler.jpg" width="240px" alt="Planet Earth">';
echo '<figcaption>Eighteen Wheeler. 🚚</figcaption>';
echo '</figure>';
echo '<figure>';
echo '<img src="./images/Winter_Sunset.jpg" width="240px" alt="Planet Earth">';
echo '<figcaption>Winter Sunset. 🌄</figcaption>';
echo '</figure>';
echo '</section>';
echo '</main>';

# Display footer section.
include ("footer.html");
?>
