const inputs = document.querySelectorAll('.signup__input');
const loginSubmit = document.getElementById('submit');
const form = document.querySelector('.signup__form');

const links = document.querySelector('.header__links_mobile');
const mobileButton = document.querySelector('.header__button_mobile');

mobileButton.addEventListener('click', () => {
    toggleMenu();
})


function toggleMenu () {
    links.classList.toggle('header__links_mobile-active');
}

function checkValid (element, isValid) {
    const errorElement = document.querySelector(`#error-${element.id}`);
    if (element.value === '') {
        errorElement.textContent = "This field can\'t be blank!";
        errorElement.classList.add('error_is-active');
        buttonState(isValid);
        return false;
    }
    if (element.validity.tooShort) {
        errorElement.textContent = "Username or password must contain more than 6 characters!";
        errorElement.classList.add('error_is-active');
        buttonState(isValid);
        return false;
    }
    resetError(errorElement);
    return true;
}
function resetError (error) {
    error.classList.remove('error_is-active');
    error.textContent = '';
}
function buttonState (isValid) {
    if (!isValid) {
        loginSubmit.setAttribute('disabled', 'disabled');
    }
    else {
        loginSubmit.removeAttribute('disabled');
    }
}
form.addEventListener('input', () => {
    let isValid = true;
    inputs.forEach(element => {
        if(!checkValid(element, isValid)) isValid = false;
    });
    buttonState(isValid);
})
