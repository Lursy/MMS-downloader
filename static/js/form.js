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
    var fileInput = document.getElementById("file");
    var formContent = document.getElementById("form");

    const files = event.dataTransfer.files;
    var png = document.getElementById("upload");

    if (files.length > 0) {
        const fileType = files[0].type;
        if (fileType.startsWith('video/')) {
            fileInput.files = files;
            console.log(files);
            formContent.classList.add('receiv');
            png.style.backgroundImage = 'url(static/image/mp4.png)';
        }else{
            fileInput.value = '';
            formContent.classList.remove('receiv');
            png.style.backgroundImage = 'url(static/image/file_error.png)';
        }
    }
});

document.getElementById('uploadForm').addEventListener('submit', function(event) {
    event.preventDefault();

    var formData = new FormData(this);
    var xhr = new XMLHttpRequest();

    // Configurar a barra de progresso
    var progressBar = document.getElementById('progress-bar');
    var progressStatus = document.getElementById('progress-status');
    var progressContainer = document.getElementById('progress-container');
    progressContainer.style.display = 'block';

    xhr.upload.onprogress = function(e) {
        if (e.lengthComputable) {
            var percent = (e.loaded / e.total) * 100;
            progressBar.style.width = percent + '%';
            progressStatus.innerHTML = Math.round(percent) + '%';
        }
    };

    // Lidar com a conclusão do upload
    xhr.onload = function() {
        if (xhr.status === 200) {
            // O upload foi bem-sucedido, redirecionar ou fazer algo aqui
            window.location.href = '/';
        } else {
            // Ocorreu um erro durante o upload
            console.error('Erro durante o upload:', xhr.statusText);
        }
    };

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                // O upload foi bem-sucedido, redirecionar ou fazer algo aqui
                window.location.href = '/';
            } else {
                // Ocorreu um erro durante o upload
                console.error('Erro durante o upload:', xhr.statusText);
            }
        }
    }


    // Enviar a solicitação AJAX
    xhr.open('POST', 'index.php', true);
    xhr.send(formData);
});

var cancelButton = document.getElementById('cancel-button');

cancelButton.addEventListener('click', function() {
    xhr.abort();
});