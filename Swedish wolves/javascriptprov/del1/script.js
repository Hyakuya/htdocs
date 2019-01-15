var datum = document.querySelector('#datum');

var date = new Date();
var weekday = new Array(7);
weekday[0] =  "Söndag";
weekday[1] = "Måndag";
weekday[2] = "Tisdag";
weekday[3] = "Onsdag";
weekday[4] = "Torsdag";
weekday[5] = "Fredag";
weekday[6] = "Lördag";

var n = weekday[date.getDay()];

datum.innerHTML = "Idag är det " + n + ". " + "Klockan är nu " + date.getHours() + ":" + date.getMinutes() + ":" + date.getSeconds();