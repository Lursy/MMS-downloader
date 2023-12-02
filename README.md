<div align="center">
  <h1>MM's Downloader</h1>
</div>
<h2>Construção</h2>

<div align="center">
  <img src="/readme_fotos/construcao.png">
  <table>
      <tr>
        <td><a href="#base"><strong>Base</strong></a></td>
        <td>
          Aqui estão todos os arquivos relacionados ao banco de dado.<br>
          <ul>
            <li><i>connect.php</i>: Usada para conectar-se ao banco de dados</li>
            <li><i>database.php</i>: Este arquivo cria o banco de dados</li>
            <li><i>table.php</i>: Este arquivo cria a tabela de videos</li>
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
        <td><a href="#Static"><strong>Static</strong></a></td>
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

<div>
  <h2 id="base">Base</h2>
</div>
