const header = document.querySelector("header");

window.addEventListener("scroll", function() {
    header.classList.toggle("sticky",  window.scrollY > 80);
});

let menu = document.querySelector('#menu-iconHome');
let navlistHome = document.querySelector('.navlistHome');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navlistHome.classList.toggle('open');
};

window.onscroll = () => {
    menu.classList.remove('bx-x');
    navlistHome.classList.remove('open');
};

const sr = ScrollReveal({
    origin: 'top',
    distance: '85px',
    duration: 2500,
    reset: true
})

sr.reveal ('.home-text',{delay:300});
sr.reveal ('.home-img',{delay:400});
sr.reveal ('.containerHome',{delay:400});

sr.reveal ('.aboutHome-img',{});
sr.reveal ('.aboutHome-text',{delay:300});

sr.reveal ('.middleHome-text',{});
sr.reveal ('.row-btnHome,.shopHome-content',{delay:400});

sr.reveal ('.review-contentHome,.contactHome',{delay:400});



function confirmar(){
    return confirm('Tem certeza que deseja sair?');
}


function confirmar2(){
    return confirm('Realmente deseja excluir esse usuário?');
}