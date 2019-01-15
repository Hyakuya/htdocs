var celcius = document.querySelector('#celcius');
var fahrenheit = document.querySelector('#fahrenheit');
var tocelcius = document.querySelector('#tocelcius');
var tofahrenheit = document.querySelector('#tofahrenheit');

tocelcius.addEventListener('click', function (e) {
    celcius.value = (fahrenheit.value - 32) * 0.5556;
});
tofahrenheit.addEventListener('click', function (e) {
    fahrenheit.value = (celcius.value * 1.8) + 32;
});