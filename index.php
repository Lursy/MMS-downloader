<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>MM's DOWNLOADER</title>
    <!-- Incluindo Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="shortcut icon" href="static/image/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="static/css/video.css">
    <link rel="stylesheet" href="static/css/modal.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
      <span class="navbar-brand">MM's Downloader</span>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <button class="btn btn-primary m-2" onclick="openWindow('add')">Adicionar</button>
          </li>
          <li class="nav-item">
            <button class="btn btn-secondary m-2"  onclick="openWindow('edit')">Editar</button>
          </li>
          <li class="nav-item">
            <button class="btn btn-danger m-2"  onclick="openWindow('remove')">Remover</button>
          </li>
        </ul>
      </div>
    </nav>
    
    <div class="container-fluid mt-5">
      <div class="jumbotron text-center">
        <div style="user-select: none;">
          <img src="static/image/icon.ico" heigth="80px" width="80px" class="img-fluid d-inline-block gif">
          <h1 class="display-4 d-inline-block align-middle">MM's Downloader</h1>
        </div>
        <p class="lead color-red mt-5">Uma boa opção para compartilhar seus videos!</p>
        <?php include("core/upload.php")?>
      </div>
    </div>

    <div class="container-fluid mt-5" style="text-align: center;">
      <h2 class="display-6">Videos</h2>
    </div>
    <div class="d-flex justify-content-center">
      <div class="container_video">
        <?php include("core/load.php")?>
      </div>
    </div>
    

    <div id="myModal" class="modal">
      <div class="modal-content father">
        <span class="close" onclick="closeWindow()">&times;</span>
        <div class="center sun">
          <div id="add" style="display: none;">
            <?php include('page/add.html');?>
          </div>
          <div id="edit" style="display: none;">
            <?php include('page/edit.html'); ?>
          </div>
          <div id="remove" style="display: none;">
            <?php include('page/remove.html'); ?>
          </div>
          <div id="video" style="display: none;">
            <?php include('page/video.php'); ?>
          </div>
        </div>
      </div>
    </div>

    <!-- Incluindo jQuery e Bootstrap JS -->
    <script src="static/js/modal.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>