<?php

// $con = mysqli_connect('localhost', 'root', '', 'curso_php');

function novaConexao($banco = 'MMS_DOWNLOADER'){
    $servidor = '127.0.0.1:3306';
    $usuario = 'root';
    $senha = '';

    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    if($conexao->connect_error){
        die('Erro:' . $conexao->connect_error);
    }

    $conexao->set_charset("utf8");

    return $conexao;
}

?>