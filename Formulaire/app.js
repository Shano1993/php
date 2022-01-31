let password = document.getElementById("id_password");
let passwordRepeat = document.getElementById("id_password_repeat");

function checkPassword() {
    if (password.value !== passwordRepeat.value) {
        passwordConfirm.setCustomValidity("Les mots de passe ne correspondent pas !");
    }
    else {
        passwordConfirm.setCustomValidity("");
    }
}

password.addEventListener('change', checkPassword);
passwordConfirm.addEventListener('keyup', checkPassword());