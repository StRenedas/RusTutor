const butt = document.querySelector(".header__auth");
const regform = document.querySelector(".signup");


function togglePopUp() {
    regform.classList.toggle('signup_is-opened');
}

butt.addEventListener('click', togglePopUp);
butt.addEventListener('click', event => {

});
