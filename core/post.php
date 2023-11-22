<p>
<?php
require_once "base/connect.php";
require "core/bd.php";

$conexao = novaConexao();
$db = new Database();

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Verifica se o arquivo foi enviado sem erros
    if($_POST["new_title"]){
        $sql = "UPDATE video SET title = ? WHERE id = " . $_POST['id'];
        $resultado = $db->query($sql, $_POST["new_title"], "s", $conexao);
    }else{
        if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
            // Define o diretório de destino para o upload
    
            // Obtém o nome do arquivo e o caminho temporário
            $name = explode(".", basename($_FILES['file']['name']));
            
            $sql = "INSERT INTO video (title) VALUES (?);";
            
            $resultado = $db->query($sql, $_POST["title"], "s", $conexao);
            $result = $resultado[0];
            $load = $resultado[1];
            if ($load) {
                $ID = $conexao->insert_id;
                $fileName = $ID . "." . end($name);
                $videoPath = "video/" . $fileName;
                // Move o arquivo do diretório temporário para o destino final
                if(move_uploaded_file($_FILES["file"]["tmp_name"], $videoPath)) {
                    // Caminho para onde você deseja salvar a miniatura
                    $thumbnailPath = 'thumbnail/' . $ID . '.jpg';
                    file_put_contents($thumbnailPath, '');
    
                    exec("ffmpeg -i $videoPath -ss 00:00:01.000 -vframes 1 $thumbnailPath -y");
                }
            }else{
                echo "Erro ao inserir o registro: " . $resultado . "~";
            }
            $conexao->close();
        } else {
            echo "Erro: " . $_FILES["file"]["error"];
        }
    }
    header("Location: /");
    exit();
}
?>
</p>