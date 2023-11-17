<p>
<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Verifica se o arquivo foi enviado sem erros
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
        // Define o diretório de destino para o upload
        $uploadDir = "video/";

        // Obtém o nome do arquivo e o caminho temporário
        $name = explode(".", basename($_FILES['file']['name']));
        $fileName = $_POST["title"] . "." . end($name);
        $targetPath = $uploadDir . $fileName;

        // Move o arquivo do diretório temporário para o destino final
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetPath)) {
            echo "O arquivo foi enviado com sucesso.";
        } else {
            echo "Desculpe, houve um problema ao enviar o arquivo.";
        }
    } else {
        echo "Erro: " . $_FILES["file"]["error"];
    }
}
?>
</p>