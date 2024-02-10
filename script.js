// toggle hamburger menu
const navbarIsi = document.querySelector(".isi-nav");

document.querySelector("#hamburger-menu").onclick = () => {
  navbarIsi.classList.toggle("active");
};

//toggle search

const searchForm = document.querySelector(".search-form");
const searchBox = document.querySelector("#search-box");

document.querySelector("#search-icon").onclick = (e) => {
  searchForm.classList.toggle("active");
  searchBox.focus();
  e.preventDefault();
};


//hapus toggle
const ham = document.querySelector("#hamburger-menu");
const sbut = document.querySelector("#search-icon");

document.addEventListener("click", function (e) {
  if (!ham.contains(e.target) && !navbarIsi.contains(e.target)) {
    navbarIsi.classList.remove("active");
  }
  if (!sbut.contains(e.target) && !searchForm.contains(e.target)) {
    searchForm.classList.remove("active");
  }
});
 


