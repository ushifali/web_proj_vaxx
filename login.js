//just a sleep function
function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

// sleep function breaks the whole linking check into it
// update: use only async functions can use sleep

// make sure u link js at the end cause it needs to execute after thehe element is created NOT BEFORE!!!
// ELSE ERROR SAYING username value is null
var username_value = document.getElementById('username');

async function validateUsername(value) {
    if(value.match(/4nm\d{2}\w{2}\d{3}/))
    alert("yes a valid username");
    else
    {
        alert("not allowed");
        // give a sleep interval
        await sleep(1000);
        username_value.value = "";
    }
}