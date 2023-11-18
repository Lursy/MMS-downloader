<?php
    require_once "base/connect.php";

    $itens = scandir("video/");
    // Filtra apenas os arquivos (remove "." e "..")
    $arquivos = array_diff($itens, array('.', '..'));
    $db = new Database();
    ?>
<head>
    <link rel="stylesheet" href="static/css/video.css">
</head>

<?php
foreach($arquivos as $file): ?>
    <?php
        $id = explode(".", $file)[0];
        $sql = "SELECT * FROM video WHERE id=?";
        $conexao = novaConexao();
        $resultado = $db->query($sql, $id, "i", $conexao)[0];
        if ($resultado->num_rows > 0) {
            // Loop pelos resultados
            $row = $resultado->fetch_assoc();
            $title = $row['title'];
        }
        $conexao->close();
    ?>
    <div class="videos">
        <video width="320" height="240" >
            <source src="../video/<?=$file?>">
        </video>
        <p><?=$title?></p>
    </div>
    <?php endforeach ?>