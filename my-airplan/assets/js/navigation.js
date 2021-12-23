window.onscroll = function() {lockHeader()};
var header = document.getElementById("header");

// offset positie van de header
var lock = header.offsetTop;

//lock class toevoegen bij het scrollen zodat het vast blijft
function lockHeader() {
  if (window.pageYOffset > lock) {
    header.classList.add("lock");
  } else {
    header.classList.remove("lock");
  }
}