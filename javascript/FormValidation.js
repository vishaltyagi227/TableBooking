const form = document.getElementsByClassName("signin-form")[0];
const emailerrorfield = document.getElementById("u-email");
const passworderrorfield = document.getElementById("u-pswd");
const password = document.getElementById("pswd");
var emailcheck = /^(([^<>()\[\]\\.,;:\s@"A-Z]+(\.[^<>()\[\]\\.,;:\s@"A-Z]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-z\-0-9]+\.)+[a-z]{2,7}))$/;
var passwordcheck = /^(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[A-Za-z])[a-zA-Z0-9!@#$%^&*]{8,16}$/;
form.addEventListener("submit", (e) => {
  const emailvalue = document.getElementById("email").value;
  const passwordValue = password.value;
  console.log(!emailvalue.match(emailcheck));
  let check = false;
  if (!emailvalue.match(emailcheck)) {
    check = true;
    emailerrorfield.innerHTML = "Invalid Email";
  }
  if (!passwordValue.match(passwordcheck)) {
    check = true;
    passworderrorfield.innerHTML = "Invalid Password";
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
password.addEventListener("blur", () => {
  const passwordValue = password.value;
  if (!passwordValue.match(passwordcheck)) {
    passworderrorfield.innerHTML = "Invalid Password";
  } else {
    passworderrorfield.innerHTML = "";
  }
});
