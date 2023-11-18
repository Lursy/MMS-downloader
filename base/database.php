<?php
    require_once "connect.php";

    $conexao = novaConexao(null);

    $sql = 'CREATE DATABASE IF NOT EXISTS MMS_DOWNLOADER';

    $resultado = $conexao->query($sql);

    if($resultado){
        echo "Sucesso :)";
    }else{
        echo "Erro: " . $conexao->error;
    }

    $conexao->close();
?>