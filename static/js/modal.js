window.page = null;

function openWindow(page, file=null) {
    document.getElementById('myModal').style.display = 'flex';
    window.page = document.getElementById(page)
    window.page.style.display = 'block'
    if(file){
        window.source = document.getElementById("source");
        source.src = `../video/${file}`;
    }
}

function closeWindow() {
    document.getElementById('myModal').style.display = 'none';
    window.page.style.display = 'none'
    window.source.pause();
}

window.onclick = function (event) {
    var modal = document.getElementById('myModal');
    if (event.target == modal) {
        modal.style.display = 'none';
        window.page.style.display = 'none'
    }
}