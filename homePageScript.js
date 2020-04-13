const username = document.getElementById('username')
const password = document.getElementById('password')
const usernameError = document.getElementById('error-username')
const passwordError = document.getElementById('error-password')
const loginSubmit = document.getElementById('submit')

username.addEventListener('input', (e)=> {
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
})