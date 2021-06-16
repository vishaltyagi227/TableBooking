const toggleButton = document.getElementsByClassName("toggle-btn")[0];
const navbarlinks = document.getElementsByClassName("main-nav")[0];
const content = document.getElementsByClassName("content")[0];
toggleButton.addEventListener("click", () => {
  navbarlinks.classList.toggle("active");
  content.classList.toggle("hide");
});
