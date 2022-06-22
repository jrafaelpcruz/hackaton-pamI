<?php 
$sql = "SELECT * FROM Conteudo WHERE codCtu =".$_REQUEST["codCtu"];
$res = $conn->query($sql) or die("erro");
$row = $res->fetch_object()
?>
<main>
<div class="container">
    <div class="coluna-conteudo">
      <div class="conteudo">
        <div>
          <h1><?php print $row->titulo ?></h1>
          <div>
            <img src="<?php print $row->imageml ?>" />
          </div>
          <div class="conteudo-pagina-autor">Por <a href=#><?php print $row->autor ?></a>.</div>
          <div class="conteudo-atributos">
            <ul>
              <li><span class="tag-verde">Conteudo-Tag</span></li>
              <li><?php print $row->data; ?> </li>
              <li><?php print $row->hora;?> </li>
            </ul>
        </div>
          <div><?php print $row->conteudo ?></div>
        </div>
      </div>
    </div>
    <div class="conteudo-left">
      <h1>Mais Comentados</h1>
      <a href="#">Lorem ipsum dolor sit amet.</a>
      <a href="#">Lorem, ipsum dolor.</a>
      <h1>Mais Recentes</h1>
      <a href="#">Lorem ipsum dolor sit amet.</a>
      <a href="#">Lorem, ipsum dolor.</a>
      <h1>Nossa Comunidade</h1>
      <a href="#">Lorem ipsum dolor sit amet.</a>
      <a href="#">Lorem, ipsum dolor.</a>      
      <h1>Nos apoie</h1>
      <div class="conteudo-left-apoie">
        <div>
          <a href="#"><img src="img/hands.jpg" /></a>
        </div>
        <div>
          <a href="#">Sua ajuda mantem nosso site vivo e independente</a>
        </div>
      </div>
    </div>
  </div>
</main>