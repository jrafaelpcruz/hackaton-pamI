<!-- script js carregando bootstrap-->
<h1 class="contato-titulo">Home</h1>
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
    <img src="img/fakeadd.png" />
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
        print 
        "<div class='conteudo'>      
          <div class='conteudo-imagem'/>
            <a href='?page=conteudo&codCtu={$row->codCtu}'>
              <img src='{$row->imageml_p}' />
            </a>
          </div>
          <div class='conteudo-principal'>
            <a href='?page=conteudo&codCtu={$row->codCtu}'><h1>".utf8_encode($row->titulo)."</h1></a>
            <div class='conteudo-atributos'>
              <ul>
                <li><span class='tag'>Conteudo-Tag</span></li>
                <li>{$row->data}</li>
              </ul>
          <div class='conteudo-atributos-comentarios'>0</div>
        </div>
        <div class='p_previa'>
          <p>".utf8_encode($row->conteudo_p)."</p>
        </div>
        <div class='conteudo-leia-mais'><a href='?page=conteudo&codCtu={$row->codCtu}'>Leia Mais...</a></div>
        </div>
        </div>";
      }
    }
    ?>      
    </div>
    <?php include 'left-menu.php' ?>
  </div>
 </main>