window.onload = function() {
    addItems();
};

function addItems() {
    document.getElementById('Mika').addEventListener('click', addMika);
    document.getElementById('Naruto').addEventListener('click', addNaruto);
    document.getElementById('Ichigo').addEventListener('click', addIchigo);
    document.getElementById('Luffy').addEventListener('click', addLuffy);
    document.getElementById('btncart').addEventListener('click', addItems);
}

function addMika() {
    document.getElementById('cart1').innerHTML = "Mika";
    localStorage.setItem('item1', 'Mika')
}
function addNaruto() {
    document.getElementById('cart1').innerHTML = "Naruto";
    localStorage.setItem('item2', 'Naruto')
}
function addIchigo() {
    document.getElementById('cart1').innerHTML = "Ichigo";
    localStorage.setItem('item3', 'Icigo')
}
function addLuffy() {
    document.getElementById('cart1').innerHTML = "Luffy";
    localStorage.setItem('item4', 'Luffy')
}

function getItems() {
    document.getElementById('cart').innerHTML = 
    localStorage.getItem('item1') + "<br>" +
    localStorage.getItem('item2') + "<br>" +
    localStorage.getItem('item3') + "<br>" +
    localStorage.getItem('item4');
    
}