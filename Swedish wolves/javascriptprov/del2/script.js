var basen = document.querySelector('#basen');
var hojden = document.querySelector('#hojden');
var subMit = document.querySelector('#submit');
var utrakning = document.querySelector('#utrakning');


subMit.addEventListener('click', function (e) {
    var svar = (basen.value * hojden.value)/2;
    utrakning.innerHTML = svar;

});


