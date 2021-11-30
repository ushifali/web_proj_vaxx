var email  = document.forms['login_info']['username'];
var pass1  = document.forms['login_info']['password1'];
var pass2  = document.forms['login_info']['password2'];

var email_error = document.getElementById('email_error');
var pass1_error = document.getElementById('pass1_error');
var pass2_error = document.getElementById('pass2_error');

email.addEventListener('textInput', email_verify);
pass1.addEventListener('textInput', pass1_verify);
pass2.addEventListener('textInput', pass2_verify);


/*function validate_uname(value)
{
    if (value.match(/^4nm\d{2}\w{2}\d{3}$/))
        alert("yes a valid username");
    else {
        username_alert.style.display = "block";
}*/

function validated()
{
    if(email.value.length <10)
    {
        email.style.border = "1px solid red";
        email_error.style.display = "block";
        email.focus();
        return false;
    }
    if(pass1.value.length <6)
    {
        pass1.style.border = "1px solid red";
        pass1_error.style.display = "block";
        pass1.focus();
        return false;
    }
    if(pass1.value!= pass2.value)
    {
        pass2.style.border = "1px solid red";
        pass2_error.style.display = "block";
        pass2.focus();
        return false;
    }
    
}

function email_verify()
{
    if(email.value.length>=10)
    {
        email.style.border = "1px solid silver";
        email_error.style.display = "none";
        return true;
    }
}
function pass1_verify()
{
    if(pass1.value.length>=6)
    {
        pass1.style.border = "1px solid silver";
        pass1_error.style.display = "none";
        return true;
    }
}
function pass2_verify()
{
    if(pass1.value == pass2.value)
    {
        pass2.style.border = "1px solid silver";
        pass2_error.style.display = "none";
        return true;
    }
}