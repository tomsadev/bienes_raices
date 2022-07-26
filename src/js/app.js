
document.addEventListener('DOMContentLoaded', function(){

    EventListener();

    darkMode();
});

function darkMode() {

    const botondarkMode = document.querySelector('.dark-mode-boton');

    botondarkMode.addEventListener('click', function(){
        document.body.classList.toggle('dark-mode');
    })
}

function EventListener(){
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', navegacionResponsive);
};

function navegacionResponsive() {
    const navegacion = document.querySelector('.navegacion');


    if(navegacion.classList.contains('mostrar')) {
        navegacion.classList.remove('mostrar');
    }else {
        navegacion.classList.add('mostrar');
    }
}
