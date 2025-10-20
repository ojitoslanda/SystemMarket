// Get the modal
let modal_registro_user = document.getElementById("modalRegistrarUser");

// Get the button that opens the modal
let btn_registro_user = document.getElementById("btnRegistrarUser");

// Get the <span> element that closes the modal
let span_registro_user = document.getElementsByClassName("closeRUser")[0];

// When the user clicks the button, open the modal 
btn_registro_user.onclick = function() {
  modal_registro_user.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span_registro_user.onclick = function() {
  modal_registro_user.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal_registro_user) {
    modal_registro_user.style.display = "none";
  }
}