const links = document.querySelector('.header__links_mobile');
const mobileButton = document.querySelector('.header__button_mobile');

mobileButton.addEventListener('click', () => {
    toggleMenu();
})


function toggleMenu() {
    links.classList.toggle('header__links_mobile-active')
}
