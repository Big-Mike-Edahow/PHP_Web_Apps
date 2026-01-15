<?php
# index.php
# PHP Image Gallery

# Set page title and display header section.
$page_title = "Home";
include ("header.html");

echo '<main>';
echo '<section class="gallery-container">';

# Folder where images are located.
$image_folder = "gallery_images/";

# Search for files ending with "*.{jpg,jpeg,png,gif}".
# GLOB_BRACE expands the comma-separated extensions.
$files = glob($image_folder . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);

if ($files) {
    foreach ($files as $image) {
        # Output the images to thumbnails.
        echo '<img src="' . $image . '"' . ' data-fullsize="' .$image . '"'
        . ' onclick="openLightbox(this)">';
            }
        } else {
            echo "<p>No images found in the gallery.</p>";
        }

echo '</section>';
echo '<section id="lightbox" class="lightbox" onclick="closeLightbox()">';
echo '<span class="close-btn">&times;</span>';
echo '<div class="lightbox-content">';
echo '<img src="" alt="Full size image" id="lightbox-image">';
echo '</div>';
echo '</section>';
echo '</main>';

# Display footer section.
include("footer.html");
?>
