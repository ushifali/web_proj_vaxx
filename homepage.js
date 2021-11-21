var scrolldown = document.getElementById('scroll_down');
var pageHeight = window.innerHeight;

// onclicking arrow down itscrolls by 100vh
scrolldown.onclick = function () {
    window.scrollTo(0, pageHeight);
}