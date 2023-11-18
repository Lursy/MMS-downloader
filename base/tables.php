<div class="titulo">Criar Tabela</div>

<?php
    require_once "connect.php";

    $sql = "CREATE TABLE IF NOT EXISTS video (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(50) NOT NULL
    )";

    $conexao = novaConexao();
    $resultado = $conexao->query($sql);

    if($resultado){
        echo "Sucesso :)";
    }else {
        echo "Erro: " . $conexao->error;
    }

    $conexao->close();
?>