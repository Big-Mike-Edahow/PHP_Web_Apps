// script.js

// Get lightbox elements.
const lightbox = document.getElementById("lightbox");
const lightboxImage = document.getElementById("lightbox-image");

// Function to open the lightbox.
function openLightbox(element) {
  // Get the full size image URL.
  const fullsizeSrc = element.getAttribute("data-fullsize");

  // Set the source of the lightbox image.
  lightboxImage.src = fullsizeSrc;

  // Add an active class to show the lightbox.
  lightbox.classList.add("active");
}

// Function to close the lightbox.
function closeLightbox() {
  // Remove the active class to hide the lightbox.
  lightbox.classList.remove("active");

  // Clear the image source.
  lightboxImage.src = "";
}
