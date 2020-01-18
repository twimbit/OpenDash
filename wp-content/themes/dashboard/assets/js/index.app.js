const one = document.querySelector(".side1");
const two = document.querySelector(".side2");
const three = document.querySelector(".side3");
const terminal = document.querySelector(".one");
const notification = document.querySelector(".two");
const availability = document.querySelector(".three");
const btn = document.querySelectorAll("button");

btn[0].addEventListener("click", function() {
  if ([...btn[0].classList].includes("btn-active")) {
    btn[0].classList.remove("btn-active");
  }
  btn[0].classList.add("btn-active");
  btn[1].classList.remove("btn-active");
  btn[2].classList.remove("btn-active");
});
btn[1].addEventListener("click", function() {
  if ([...btn[1].classList].includes("btn-active")) {
    btn[1].classList.remove("btn-active");
  }
  btn[1].classList.add("btn-active");
  btn[0].classList.remove("btn-active");
  btn[2].classList.remove("btn-active");
});
btn[2].addEventListener("click", function() {
  if ([...btn[2].classList].includes("btn-active")) {
    btn[2].classList.remove("btn-active");
  }
  btn[2].classList.add("btn-active");
  btn[1].classList.remove("btn-active");
  btn[0].classList.remove("btn-active");
});

one.addEventListener("click", function() {
  one.children[0].classList.replace("fa-plus", "fa-minus");
  two.children[0].classList.replace("fa-minus", "fa-plus");
  three.children[0].classList.replace("fa-minus", "fa-plus");
  terminal.style.width = "100%";
  notification.style.width = "0";
  availability.style.width = "0";
});

two.addEventListener("click", function() {
  one.children[0].classList.replace("fa-minus", "fa-plus");
  two.children[0].classList.replace("fa-plus", "fa-minus");
  three.children[0].classList.replace("fa-minus", "fa-plus");
  terminal.style.width = "0";
  notification.style.width = "100%";
  availability.style.width = "0";
});

three.addEventListener("click", function() {
  three.children[0].classList.replace("fa-plus", "fa-minus");
  one.children[0].classList.replace("fa-minus", "fa-plus");
  two.children[0].classList.replace("fa-minus", "fa-plus");
  terminal.style.width = "0";
  notification.style.width = "0";
  availability.style.width = "100%";
});

