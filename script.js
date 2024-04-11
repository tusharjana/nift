let email = document.getElementById("#con-email");
let con_name = document.getElementById("#con-name");
let sub = document.getElementById("#con-sub");
let msg = document.getElementById("#con-msg");
let submit = document.getElementById("#con-submit");

function validateContact() {
  $(email, con_name, sub, msg).val("");
  alert("Message sent.");
}


