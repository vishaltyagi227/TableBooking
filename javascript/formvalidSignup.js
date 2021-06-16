const form = document.getElementsByClassName("signin-form")[0];
const nameerrorfield = document.getElementById("u-name");
const emailerrorfield = document.getElementById("u-email");
const passworderrorfield = document.getElementById("u-pswd");
const confirmpassworderrorfield = document.getElementById("u-cpswd");
const name = document.getElementById("name");
const password = document.getElementById("pswd");
const confirmpassword = document.getElementById("cpswd");
var emailcheck = /^(([^<>()\[\]\\.,;:\s@"A-Z]+(\.[^<>()\[\]\\.,;:\s@"A-Z]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-z\-0-9]+\.)+[a-z]{2,7}))$/;
var passwordcheck = /^(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[A-Za-z])[a-zA-Z0-9!@#$%^&*]{8,16}$/;
var namecheck = /^[a-zA-Z]{3,30}([\s])?[a-zA-Z]{0,30}([\s])?[a-zA-Z]{0,30}$/;
form.addEventListener("submit", (e) => {
  const nameValue = name.value;
  const emailvalue = document.getElementById("email").value;
  const passwordValue = password.value;
  const confirmpasswordValue = confirmpassword.value;
  let check = false;
  if (!nameValue.match(namecheck)) {
    check = true;
    nameerrorfield.innerHTML = "Invalid Name";
  }
  if (!emailvalue.match(emailcheck)) {
    check = true;
    emailerrorfield.innerHTML = "Invalid Email";
  }
  if (!passwordValue.match(passwordcheck)) {
    check = true;
    passworderrorfield.innerHTML = "Invalid Password";
  }
  if (!(confirmpasswordValue == passwordValue)) {
    check = true;
    confirmpassworderrorfield.innerHTML = "Confirm password not match";
  }
  if (check) {
    e.preventDefault();
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
name.addEventListener("blur", () => {
  const nameValue = name.value;
  if (!nameValue.match(namecheck)) {
    nameerrorfield.innerHTML = "Invalid Name";
  } else {
    nameerrorfield.innerHTML = "";
  }
});
password.addEventListener("blur", () => {
  const passwordValue = password.value;
  if (!passwordValue.match(passwordcheck)) {
    passworderrorfield.innerHTML = "Invalid Password";
  } else {
    passworderrorfield.innerHTML = "";
  }
});

confirmpassword.addEventListener("blur", () => {
  const passwordValue = password.value;
  const confirmpasswordValue = confirmpassword.value;
  if (!(confirmpasswordValue == passwordValue)) {
    confirmpassworderrorfield.innerHTML = "Confirm password not match";
  } else {
    confirmpassworderrorfield.innerHTML = "";
  }
});
