console.log('Hello');

//Toggle mobile menu

const buttonElement = document.getElementById('menu-icon');

buttonElement.addEventListener('click', function (event) {
  const menuElement = document.getElementById('menu-list');
  menuElement.classList.toggle("top-bar");
});

//Toggle mobile menu after link clicked

const topbarElements = document.querySelectorAll('.top-bar .menu-item');
var linkArr = Array.prototype.slice.call(topbarElements);
linkArr.map(el => {
    let targetElement = document.getElementById(el.id);
    targetElement.addEventListener('click', function(event){
        const menuElement = document.getElementById('menu-list');
        menuElement.classList.toggle("top-bar");
    });
});