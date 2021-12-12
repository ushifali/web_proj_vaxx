var email  = document.forms['login_info']['username'];
var pass1  = document.forms['login_info']['password1'];
var pass2  = document.forms['login_info']['password2'];

var usn_error = document.getElementById('usn_error');
usn_error.style.display = 'none';
var pass2_error = document.getElementById('pass2_error');
pass2_error.style.display = 'none';

email.addEventListener('textInput', email_verify);
pass2.addEventListener('textInput', pass2_verify);


function validate_uname(value)
{
    if (value.match(/^4nm\d{2}\w{2}\d{3}$/))
        {
            email.style.border = "none";
            email.style.borderBottom = "1px solid #aec0b9";
            usn_error.style.display = 'none';
     
            
        }
    else {
        email.style.border = "1px solid red";
        usn_error.style.display = 'block';
        email.focus();
    }
        
}

function validated()
{
    if(pass1.value != pass2.value)
    {
        pass2.style.border = "1px solid red";
        pass2_error.style.display = "block";
        pass2.focus();
        
    }

    if(pass1.value === pass2.value)
    {
        pass2.style.borderBottom = "1px solid green";      
    }
    
}

