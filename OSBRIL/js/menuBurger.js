const menuBurger = () => {
  let menuBtn = document.querySelector('.menus-btn');
  let menu = document.querySelector('.menus');
  menuBtn.addEventListener('click', function () {
    menuBtn.classList.toggle('active');
    menu.classList.toggle('active');
  });
};

menuBurger();
