// Hamburger Navigation Toggle (on Mobile)
const menu = document.querySelector('#mobile-menu');
const menuLinks = document.querySelector('.nav-list');

menu.addEventListener('click', function() {
    menu.classList.toggle('is-active'); // Für die X-Animation
    menuLinks.classList.toggle('active'); // Für das Ausfahren des Menüs
});