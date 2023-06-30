const $toggleMenu = document.getElementById('toggle-menu');
const $header = document.getElementById('header');

$toggleMenu.addEventListener('click', () => {
    $header.classList.toggle('header--show');
});