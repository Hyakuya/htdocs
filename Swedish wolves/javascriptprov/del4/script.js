const data = document.querySelector('p');
const knapp = document.querySelector('button');

knapp.addEventListener('click',()=>{
  document.querySelector('span').innerHTML = 'Texten som skrevs tidigare var \'' + data.innerHTML + '\'.'
});

var datum = document.querySelector('.datum');
setInterval(interVal, 1000)
function interVal() {
  let date = new Date;
  datum.innerHTML =` ${date.getHours()}:${date.getMinutes()}:${date.getSeconds()}`;
}