file = document.getElementById("file")

file.addEventListener('change', () => {
    var fileInput = this;
    var formContent = document.getElementById("form");
    var png = document.getElementById("upload");

    if(fileInput.File.length > 0){
        png.style.backgroundImage = 'url(static/image/mp4.png)';
        formContent.classList.add('receiv');
    }
});

file.addEventListener('drop', (event) => {
    event.preventDefault();
    var fileInput = event;
    var formContent = document.getElementById("form");

    const files = event.dataTransfer.files;
    var png = document.getElementById("upload");

    if (files.length > 0) {
        file.value = '';
        const fileType = files[0].type;
        if (fileType.startsWith('video/')) {
            fileInput.files = files;
            formContent.classList.add('receiv');
            png.style.backgroundImage = 'url(static/image/mp4.png)';
        }else{
            file.value = '';
            formContent.classList.remove('receiv');
            png.style.backgroundImage = 'url(static/image/file_error.png)';
        }
    }
});