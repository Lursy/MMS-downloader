window.page = null;

function openWindow(page) {
    document.getElementById('myModal').style.display = 'table';
    window.page = document.getElementById(page)
    window.page.style.display = 'block'
}

function closeWindow() {
    document.getElementById('myModal').style.display = 'none';
    window.page.style.display = 'none'
}

window.onclick = function (event) {
    var modal = document.getElementById('myModal');
    if (event.target == modal) {
        modal.style.display = 'none';
        window.page.style.display = 'none'
    }
};