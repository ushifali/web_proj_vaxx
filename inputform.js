var vaccine_taken = document.querySelector("#vacc_yes")
var option_1 = document.querySelector("#option_block_1")


var vaccine_not_taken = document.querySelector("#vacc_no")
var option_2 = document.querySelector("#option_block_2")

// suppose vaccine is taken itll display the options of when it was taken 
vaccine_taken.onclick = function() {
    option_1.style.display = "block";
    option_2.style.display = "none";
}

// if not then why not also yes option block disappers
vaccine_not_taken.onclick = function () {
    option_1.style.display = "none";
    option_2.style.display = "block";
}


//for the second doze
var vaccine_taken_2 = document.querySelector("#vacc_2_yes")
var option_3 = document.querySelector("#option_block_3")
option_3.style.display = "none"

var vaccine_not_taken_2 = document.querySelector("#vacc_2_no")

vaccine_taken_2.onclick = function () {
option_3.style.display = "block";
}

 vaccine_not_taken_2.onclick = function () {
option_3.style.display = "none";
}