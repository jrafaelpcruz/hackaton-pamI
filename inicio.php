<!-- script js carregando bootstrap-->
<script src="js/bootstrap.min.js"></script>
<div class="spotlight-container">
  <div class="spotlight">
      <!--inicio do código do carousel -->
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <a href="#"><img src="img/woman_sunglasses.jpg" class="d-block w-100" alt="..."></a>
        <p><a href="#">Link A</a></p>
      </div>
      <div class="carousel-item">
        <a href="#"><img src="img/mulher_triste.jpg" class="d-block w-100" alt="..."></a>
        <p><a href="#">Link B</a></p>
      </div>
      <div class="carousel-item">
        <a href="#"><img src="img/codigo_azul.jpg" class="d-block w-100" alt="..."></a>
        <p><a href="#">Link C</a></p>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button>
  </div>
      <!-- Fim do codigo do carousel-->
  </div>
  <div class="spotlight-anuncio">
    <p>Espaço para anúncio</p>
    <a href="?page=conteudo-inserir">Gerenciamento Fake(tm)</a>
  </div>
</div>
<main>
	 <div class="container">
    <div class="coluna-conteudo">
    <?php 
    $sql = "SELECT * FROM Conteudo ORDER BY codCtu DESC;";
    $res = $conn->query($sql) or die("erro");
    $qtd = $res->num_rows;
    if($qtd > 0) {
      while($row = $res->fetch_object()) {
        print "<div class='conteudo'>";      
          print "<div class='conteudo-imagem'/>";
          print  "<a href='?page=conteudo&codCtu={$row->codCtu}'><img src='{$row->imageml_p}' /></a>";
        print "</div>";
        print "<div class='conteudo-principal'>";
          print "<a href='?page=conteudo&codCtu={$row->codCtu}'>$row->titulo</a>";
          print "<div class='conteudo-atributos'>";
          print "<ul>";
            print "<li><span class='tag-rosa'>Conteudo-Tag</span></li>";
            print "<li>{$row->data}</li>";
          print "</ul>";
          print "<div class='conteudo-atributos-comentarios'>0</div>";
        print "</div>";
        print "<div><p>{$row->conteudo_p}</p></div>";
        print "</div></div>";
      }
    }
    ?>
      
    </div>
    <div class="conteudo-left">
      <h1>Mais Comentados</h1>
      <a href="#">Lorem ipsum dolor sit amet.</a>
      <a href="#">Lorem, ipsum dolor.</a>
      <h1>Mais Recentes</h1>
      <a href="#">Lorem ipsum dolor sit amet.</a>
      <a href="#">Lorem, ipsum dolor.</a>
      <h1>Nossa Comunidade</h1>
      <a href="https://racionalpower.wordpress.com/">RACIONAL POWER.</a>
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