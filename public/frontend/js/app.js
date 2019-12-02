const password = document.querySelector('#password');
const confirmPassword = document.querySelector('#confirm_passwords');

function validatePassword()
{
    if(password.value !== confirmPassword.value)
    {
        confirmPassword.setCustomValidity('Password not match');
    } else {
        confirmPassword.setCustomValidity('');
    }

    
}

password.onchange = validatePassword;
confirmPassword.onkeyup = validatePassword;
