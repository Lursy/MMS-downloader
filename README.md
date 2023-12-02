<div align="center">
  <h1>MM's Downloader</h1>
</div>
<h2 id="construcao">Construção</h2>

<div align="center">
  <table>
      <tr>
        <td><a href="#base"><strong>Base</strong></a></td>
        <td>
          Aqui estão todos os arquivos relacionados ao banco de dado.<br>
          <ul>
            <li><a href="#connect.php"><i>connect.php</i></a>: Usada para conectar-se ao banco de dados</li>
            <li><a href="#database.php"><i>database.php</i></a>: Este arquivo cria o banco de dados</li>
            <li><a href="#table.php"><i>table.php</i></a>: Este arquivo cria a tabela de videos</li>
          </ul>
        </td>
      </tr>
      <tr>
        <td><a href="#core"><strong>Core</strong></a></td>
        <td>
          Aqui estão os principais arquivos back-end do site.<br>
          <ul>
            <li><i>bd.php</i>: Aqui é criada a classe <code>Database</code> usada para evitar sql injection nas querys</li>
            <li><i>load.php</i>: Este arquivo é responsavel por exibir os videos presentes no banco de dados na tela inicial</li>
            <li><i>post.php</i>: Este arquivo é responsavel por controlar todas as requisições POST sendo elas upload, edit e remove</li>
          </ul>
        </td>
      </tr>
      <tr>
        <td><a href="#page"><strong>Page</strong></a></td>
        <td>
          Aqui estão as paginas carredas no modal.
          <ul>
              <li><i>add.html</i>: Aqui está o formulário para upload de videos</li>
              <li><i>edit.php</i>: Aqui está o formulário para editar titulos</li>
              <li><i>remove.php</i>: Aqui está o formulario para remover videos</li>
              <li><i>video.html</i>: Aqui está o htlm que insere o video ao modal</li>
          </ul>
        </td>
      </tr>
      <tr>
        <td><a href="#static"><strong>Static</strong></a></td>
        <td>
          Aqui estão os arquivos estáticos do site
          <ul>
            <li><i>css</i></li>
            <li><i>js</i></li>
            <li><i>images</i></li>
        </ul>
        </td>
      </tr>
      <tr>
        <td><strong>Thumbnail</strong></td>
        <td>Está é a pasta onde ficam armazenadas as thumbnails dos videos upados</td>
      </tr>
      <tr>
        <td><strong>Video</strong></td>
        <td>Está é a pasta onde ficam armazenadas os videos upados</td>
      </tr>
  </table>
</div>
<br>
<br>
<div>
  <h2 id="base">Base</h2>
  <h3 id="connect.php">connect.php:</h3>
  <p>
    Arquivo usado para iniciar a conexão com o banco de dados.<br>
    Esta criada uma função <code>NovaConexao()</code> que é usada nos demais arquivos que usam mySQLi
  </p>
  <details>
    <summary>Código</summary>

```php
<?php
  function novaConexao($banco = '<NAME>'){
      $servidor = '<localhost>:<PORT>';
      $usuario = '<ROOT>';
      $senha = '<PASSWORD>';
  
      $conexao = new mysqli($servidor, $usuario, $senha, $banco);
  
      if($conexao->connect_error){
          die('Erro:' . $conexao->connect_error);
      }
  
      $conexao->set_charset("utf8");
      return $conexao;
  }
?>
```
    
  </details>

  <br>

  <h3 id="database.php">database.php:</h3>
  <p>
    Pagina que cria o banco de dados.<br>
    É usado inicialmente para que o site possa funcionar corretamente.
  </p>
  <details>
    <summary>Código</summary>

```php
<?php
    require_once "connect.php";

    $conexao = novaConexao(null);

    $sql = 'CREATE DATABASE IF NOT EXISTS <NOME_BANCO>';

    $resultado = $conexao->query($sql);

    if($resultado){
        echo "Sucesso :)";
    }else{
        echo "Erro: " . $conexao->error;
    }

    $conexao->close();
?>
```
    
  </details>

  <br>

  <h3 id="table.php">table.php:</h3>
  <p>
    Pagina que cria a tabela de videos no banco de dados.<br>
    É usado inicialmente para que o site possa funcionar corretamente.
  </p>
  <details>
    <summary>Código</summary>

```php
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
```
    
  </details>
</div>
