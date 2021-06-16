const form = document.getElementsByClassName("signin-form")[0];
const emailerrorfield = document.getElementById("u-email");
const nameerrorfield = document.getElementById("u-name");
const mobileerrorfield = document.getElementById("u-mobile");
const bdateerror = document.getElementById("b-date");
const btimeerror = document.getElementById("b-time");
const name = document.getElementById("name");
const mobile = document.getElementById("mobile");
var emailcheck = /^(([^<>()\[\]\\.,;:\s@"A-Z]+(\.[^<>()\[\]\\.,;:\s@"A-Z]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-z\-0-9]+\.)+[a-z]{2,7}))$/;
var namecheck = /^[a-zA-Z]{3,30}([\s])?[a-zA-Z]{0,30}([\s])?[a-zA-Z]{0,30}$/;
var mobilecheck = /^[789][0-9]{9}$/;
form.addEventListener("submit", (e) => {
  const nameValue = name.value;
  const mobileValue = mobile.value;
  const emailvalue = document.getElementById("email").value;
  let check = false;
  if (!nameValue.match(namecheck)) {
    check = true;
    nameerrorfield.innerHTML = "Invalid Name";
  }
  if (!mobileValue.match(mobilecheck)) {
    check = true;
    mobileerrorfield.innerHTML = "Invalid Mobile No.";
  }
  if (!emailvalue.match(emailcheck)) {
    check = true;
    emailerrorfield.innerHTML = "Invalid Email";
  }
  const bookdate = document.getElementsByName("date")[0];
  const booktime = document.getElementsByName("time")[0];
  if (bookdate.value == "none") {
    check = true;
    bdateerror.innerHTML = "Date Invalid ";
  }
  if (booktime.value == "none") {
    check = true;
    btimeerror.innerHTML = "Time Invalid ";
  }
  if (check) {
    e.preventDefault();
  }
});
mobile.addEventListener("blur", () => {
  const mobileValue = mobile.value;
  if (!mobileValue.match(mobilecheck)) {
    mobileerrorfield.innerHTML = "Invalid Mobile No.";
  } else {
    mobileerrorfield.innerHTML = "";
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
