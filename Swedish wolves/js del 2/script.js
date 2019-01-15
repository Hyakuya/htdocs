// function ValidateForm() {
//     var name = document.form["form"]["name"].value;
//     var user = document.form["form"]["user"].value;
//     var password1 = document.form["form"]["password"].value;
//     var password2 = document.form["form"]["pass_again"].value;
//
//     if(name == "") {
//         alert("Name need to be filled out");
//         return false;
//     }
//
// }
//

var form = document.querySelector('form');
var namee = document.querySelector('#name');
var user = document.querySelector("#user");
var password1 = document.querySelector('#password');
var password2 = document.querySelector('#pass_again');
var error = 0;

form.addEventListener("submit", function(e) {
    e.preventDefault();


    if(namee.value == "") {
        alert("Name needs to be filled out");
        error++;
    }
    if(namee.value.charAt(0) !== namee.value.charAt(0).toUpperCase()) {
        alert("First character in name needs to be an uppercase")
        error++;
    }
    if(user.value == "") {
        alert("user needs to be filled out");
        error++;
    }
    if(password1.value == "") {
        alert("password needs to be filled out");
        error++;
    }
    if(password1.value !== password2.value) {
        alert("password don't match");
        error++;
    }

    if (error === 0) {
        alert("You have registered")
    }

});