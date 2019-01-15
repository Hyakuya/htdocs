
window.onunload = function() {
    setTime();
}
window.onload = function () {
    setData();
    getData();
    getTime();
    removeTime();
    
};


function setData() {
    localStorage.setItem("FirstName", "Mika");
    localStorage.setItem("LastName", "Hyakuya");
}
function getData() {
    document.getElementById("data").innerHTML =  localStorage.getItem("LastName") + " " + localStorage.getItem("FirstName");
}

function setTime() {
    myTime = new Date;
    hour = myTime.getHours();
    minute = myTime.getMinutes();
    secound = myTime.getSeconds();
    fulltime = hour + ":" + minute + ":" + secound;
    //document.getElementById("timeData").innerHTML = fulltime;
    localStorage.setItem("time", fulltime);
}
function getTime() {
    document.getElementById("timeData").innerHTML = "last visit: " + localStorage.getItem("time");
}

function removeTime() {
    localStorage.removeItem("time");
}