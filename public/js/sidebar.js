let sidebar = document.querySelector(".sidebar");
let boxsidebar = document.querySelector(".boxsidebar");
let textsidebar = document.querySelector(".prof");
let closeBtn = document.querySelector("#btn");

closeBtn.addEventListener("click", () => {
  sidebar.classList.toggle("open");
  boxsidebar.classList.toggle("open");
  textsidebar.classList.toggle("open");
});
