var forloopbtn = document.querySelector('#forloopbtn');
var whilebtn = document.querySelector('#whilebtn');
var forinbtn = document.querySelector('#forinbtn');
var downwhilebtb = document.querySelector('#downwhilebtn');

var fordiv = document.querySelector('#for');
var whilediv = document.querySelector('#while');
var forindiv = document.querySelector('#forin');
var dowhilediv = document.querySelector('#dowhile');

forloopbtn.addEventListener("click", function(e) {
   for(var i = 0; i<5; i++) {
       fordiv.innerHTML+= "oh maw gaud" + "<br>";
   }
});


whilebtn.addEventListener("click", function(e) {
    var name = "notClicked";
   while(name === "notClicked") {
       whilediv.innerHTML+= "oh maw gaud" + "<br>";
       name = "Clicked";
   }
});










