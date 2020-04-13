/*const username = document.getElementById('username')
const password = document.getElementById('password')
const usernameError = document.getElementById('error-username')
const passwordError = document.getElementById('error-password')*/
const inputs = document.querySelectorAll('.signup__input');
const loginSubmit = document.getElementById('submit');
const form = document.querySelector('.signup__form');
/*username.addEventListener('input', (e)=> {
    e.preventDefault();
    let messages = [];
    usernameValue = username.value;
    console.log(usernameValue);
    console.log(typeof(usernameValue));
    if (usernameValue === '') {
        messages.push('Username can\'t be blank!');
        usernameError.innerText = messages[0];
        username.classList.add('signup-bad');
    }
    else if (usernameValue.length < 3) {
        messages.push('Username must contain more than 3 characters!');
        console.log(messages[0]);
        usernameError.innerText = messages[0];
        username.classList.add('signup-bad');
    }
    else {
        usernameError.innerText = '';
        username.classList.remove('signup-bad');
        username.classList.add('signup-good');
    }
})
password.addEventListener('input', (e) => {
    e.preventDefault();
    let messages1 = [];
    passwordValue = password.value;
    if (passwordValue.length < 6) {
        messages1.push('Password must contain more than 6 characters!')
        passwordError.innerText = messages1[0];
        password.classList.add('signup-bad');
    }
    else {
        passwordError.innerText = '';
        password.classList.remove('signup-bad');
        password.classList.add('signup-good');
    }
})*/

function checkValid (element, isValid) {
    const errorElement = document.querySelector(`#error-${element.id}`);
    if (element.value === '') {
        errorElement.textContent = "Username can\'t be blank!";
        errorElement.classList.add('error_is-active');
        buttonState(isValid);
        return false;
    }
    if (element.validity.tooShort) {
        errorElement.textContent = "Username must contain more than 6 characters!";
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
