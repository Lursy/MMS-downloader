<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>MMS DOWNLOADER</title>
    <!-- Incluindo Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/modal.css">
    <link rel="shortcut icon" href="static/image/icon.ico" type="image/x-icon">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
      <span class="navbar-brand">MMS Downloader</span>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link text-dark" href="/">Home</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid mt-5">
      <div class="jumbotron text-center">
        <h1 class="display-4">Olá, seja bem vindo(a) a pagina do administrador</h1>
        <p class="lead color-red mt-5">Cuidado! As alterações podem causar danos a pagina inicial</p>
      </div>
    </div>

    <div class="container-fluid mt-5" style="text-align: center;">
      <h2 class="display-6">Videos</h2>
      <button class="btn btn-outline-primary m-2" onclick="openWindow()">Adicionar</button>
      <button class="btn btn-outline-secondary m-2">Editar</button>
      <button class="btn btn-outline-danger m-2">Remover</button>
    </div>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeWindow()">&times;</span>
            <p>Conteúdo da janela aqui...</p>
        </div>
    </div>

    <script>
      function openWindow() {
        document.getElementById('myModal').style.display = 'block';
      }

      function closeWindow() {
        document.getElementById('myModal').style.display = 'none';
      }

      window.onclick = function (event) {
        var modal = document.getElementById('myModal');
        if (event.target == modal) {
            modal.style.display = 'none';
        }
      };
    </script>

    <!-- Incluindo jQuery e Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>