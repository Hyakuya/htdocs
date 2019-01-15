var utskrift = document.querySelector('#utskrift');
var foo = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
for(var i = 0; i < 10; i++) {
    utskrift.innerHTML += foo[i] + " ";
}
