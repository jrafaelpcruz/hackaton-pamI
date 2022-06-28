<?php 
$sql = "SELECT * FROM Conteudo WHERE codCtu =".$_REQUEST["codCtu"];
$res = $conn->query($sql) or die("erro");
$row = $res->fetch_object()
?>
<h1 class="contato-titulo">Coluna</h1>
<main>
<div class="container">
    <div class="coluna-conteudo">
      <div class="conteudo">
        <div>
          <h1><?php print utf8_encode($row->titulo) ?></h1>
          <div>
            <img src="<?php print $row->imageml ?>" />
          </div>
          <div class="conteudo-pagina-autor">Por <a href=#><?php print utf8_encode($row->autor) ?></a>.</div>
          <div class="conteudo-atributos">
            <ul>
              <li><span class="tag">Conteudo-Tag</span></li>
              <li><?php print $row->data; ?></li>
              <li><?php print $row->hora; ?></li>
            </ul>
        </div>
          <div><?php print utf8_encode($row->conteudo) ?></div>
        </div>
      </div>
    </div>
   <?php include "left-menu.php" ?>
  </div>
</main>