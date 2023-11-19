<?php
    require_once "base/connect.php";

    $itens = scandir("video/");
    // Filtra apenas os arquivos (remove "." e "..")
    $arquivos = array_diff($itens, array('.', '..'));
    $db = new Database();
?>

<?php
foreach($arquivos as $file): ?>
    <?php
        $id = explode(".", $file)[0];
        $sql = "SELECT * FROM video WHERE id=?";
        $conexao = novaConexao();
        $result = $db->query($sql, $id, "i", $conexao)[0];
        if ($result->num_rows > 0) {
            // Loop pelos resultados
            $row = $result->fetch_assoc();
            $title = $row['title'];
        }
        $conexao->close();
    ?>
    
    <div class="box d-inline-block videos" onclick="openWindow('video', file='<?=$file?>')">
        <video width="300" height="220">
            <source src="../video/<?=$file?>">
        </video>
        <p><?=$title?></p>
    </div>

    <?php endforeach ?>