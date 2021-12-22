window.onscroll = function() {lockHeader()};

// Get the header
var header = document.getElementById("header");

// Get the offset position of the navbar
var lock = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function lockHeader() {
  if (window.pageYOffset > lock) {
    header.classList.add("lock");
  } else {
    header.classList.remove("lock");
  }
}