// script.js

const backButton = document.getElementById("back-button");

if (backButton) {
    backButton.addEventListener('click', goBack);
    function goBack() {
        window.history.back(); // Same as history.go(-1)
    }
}
