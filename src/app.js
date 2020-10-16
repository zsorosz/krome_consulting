console.log('Hello');

//Toggle mobile menu

const buttonElement = document.getElementById('menu-icon');

buttonElement.addEventListener('click', function (event) {
  const menuElement = document.getElementById('menu-list');
  menuElement.classList.toggle("top-bar");
});

// Toggle mobile menu after link clicked

const topbarElements = document.querySelectorAll('.top-bar .menu-item');
var linkArr = Array.prototype.slice.call(topbarElements);
linkArr.map(el => {
    let targetElement = document.getElementById(el.id);
    targetElement.addEventListener('click', function(event){
        const menuElement = document.getElementById('menu-list');
        menuElement.classList.toggle("top-bar");
    });
});

//Toggle header on scroll

const body = document.body;
const nav = document.querySelector(".page-header");
const scrollUp = "scroll-up";
const scrollDown = "scroll-down";
let lastScroll = 0;
 
window.addEventListener("scroll", () => {
  const currentScroll = window.pageYOffset;
  if (currentScroll <= 0) {
    body.classList.remove(scrollUp);
    return;
  }
   
  if (currentScroll > lastScroll && !body.classList.contains(scrollDown)) {
    // down
    body.classList.remove(scrollUp);
    body.classList.add(scrollDown);
  } else if (currentScroll < lastScroll && body.classList.contains(scrollDown)) {
    // up
    body.classList.remove(scrollDown);
    body.classList.add(scrollUp);
  }
  lastScroll = currentScroll;
});