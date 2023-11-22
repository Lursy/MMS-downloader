<p>
<?php
require_once "base/connect.php";
require "core/bd.php";

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Verifica se o arquivo foi enviado sem erros
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
        // Define o diretório de destino para o upload

        // Obtém o nome do arquivo e o caminho temporário
        $name = explode(".", basename($_FILES['file']['name']));
    

        $db = new Database();
        $sql = "INSERT INTO video (title) VALUES (?);";
        $conexao = novaConexao();
        $resultado = $db->query($sql, $_POST["title"], "s", $conexao);
        $load = $resultado[1];
        $result = $resultado[0];
        if ($load) {
            $ID = $conexao->insert_id;
            $fileName = $ID . "." . end($name);
            $targetPath = "video/" . $fileName;
            // Move o arquivo do diretório temporário para o destino final
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetPath)) {
                try{
                    header("Location: /");
                    exit();
                }catch(Exception $e){
                    echo $e;
                }
            }
        }else{
            echo "Erro ao inserir o registro: " . $resultado . "~";
        }
        $conexao->close();
    } else {
        echo "Erro: " . $_FILES["file"]["error"];
    }
}
?>
</p>