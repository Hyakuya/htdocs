var image = document.querySelector('img');
image.addEventListener("click", function(e){
    if(image.style.filter === 'grayscale(1)') {
        image.style.filter = 'grayscale(0)';
    } else {
        image.style.filter = 'grayscale(1)';
    }
});

var datum = document.querySelector('#datum');
var date = new Date;
datum.innerHTML = date.getUTCDate()+ '/' + date.getUTCMonth()+1 + '/' + date.getUTCFullYear();

var sek = document.querySelector('#sek');
var counter = 0;
setInterval(function(){
    counter++;
    sek.innerHTML = counter;
}, 1000)

var bandtext = document.querySelector('#bandtext');
var bandcamp = document.querySelector('#bandcamp');

bandcamp.addEventListener('click',function (e) {

    if(bandtext.innerHTML === 'get bamboozeld') {
        bandtext.innerHTML = "Visste du att man kan yamma-skiten ur livet? Det är inte så svårt";
    } else {
        bandtext.innerHTML = "get bamboozeld";
    }
});
var banktext = document.querySelector('#banktext');
var bank = document.querySelector('#bank');

bank.addEventListener('click',function (e) {

    if(banktext.innerHTML === 'get bamboozeld') {
        banktext.innerHTML = "De ser alla lite obehagliga ut, men dem har pengar och det ska vi ändå vara glada över";
    } else {
        banktext.innerHTML = "get bamboozeld";
    }
});
var profiltext = document.querySelector('#profiltext');
var profil = document.querySelector('#profil');

profil.addEventListener('click',function (e) {

    if(profiltext.innerHTML === 'get bamboozeld') {
        profiltext.innerHTML = "En kombination av band och yamma ger en bra koppling tillsammans banken";
    } else {
        profiltext.innerHTML = "get bamboozeld";
    }
});

var array = document.querySelectorAll('li');
var aktivknapp = document.querySelector('#aktivknapp');


for(var i = 0; i < array.length; i++) {
    array[i].addEventListener('click',function (e) {
       aktivknapp.innerHTML = e.target.innerHTML;
    });
}
