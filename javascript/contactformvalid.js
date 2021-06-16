const form = document.getElementsByClassName("signin-form")[0];
const emailerrorfield = document.getElementById("u-email");
const nameerrorfield = document.getElementById("u-name");
const name = document.getElementById("name");
var emailcheck = /^(([^<>()\[\]\\.,;:\s@"A-Z]+(\.[^<>()\[\]\\.,;:\s@"A-Z]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-z\-0-9]+\.)+[a-z]{2,7}))$/;
var namecheck = /^[a-zA-Z]{3,30}([\s])?[a-zA-Z]{0,30}([\s])?[a-zA-Z]{0,30}$/;
form.addEventListener("submit", (e) => {
  const nameValue = name.value;
  const emailvalue = document.getElementById("email").value;
  let check = false;
  if (!nameValue.match(namecheck)) {
    check = true;
    nameerrorfield.innerHTML = "Invalid Name";
  }
  if (!emailvalue.match(emailcheck)) {
    check = true;
    emailerrorfield.innerHTML = "Invalid Email";
  }
  if (check) {
    e.preventDefault();
  } else {
    alert("successfull");
  }
});

name.addEventListener("blur", () => {
  const nameValue = name.value;
  if (!nameValue.match(namecheck)) {
    nameerrorfield.innerHTML = "Invalid Name";
  } else {
    nameerrorfield.innerHTML = "";
  }
});

const email = document.getElementById("email");
email.addEventListener("blur", () => {
  const emailvalue = email.value;
  if (!emailvalue.match(emailcheck)) {
    emailerrorfield.innerHTML = "Invalid Email";
  } else {
    emailerrorfield.innerHTML = "";
  }
});
