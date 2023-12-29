const navIcon = document.querySelector('.nav-icon');
const navMenu = document.querySelector('.nav-menu');


//acao para o navbar quando responsivo 
navIcon.addEventListener('click', () => {
    navIcon.classList.toggle('active');
    navMenu.classList.toggle('active');
});

/*
window.addEventListener("scroll", function() {
    var navbar = this.document.querySelector("navbar");
    navbar.classList.toggle("sticky",  window.scrollY > 80);
});
*/