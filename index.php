<!DOCTYPE html>
<html lang="ptbr">
  <link rel="stylesheet" href="styles/styles.css">
  <!-- caroulsel - extraido do bootstrap -->
  <link rel="stylesheet" href="styles/carousel.css">
  <!--google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital@1&family=Damion&display=swap" rel="stylesheet">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Placeholder Title</title>
</head>
<body>
<!-- script js carregando bootstrap-->
<script src="js/bootstrap.min.js"></script>
 <header><?php include 'header.php'?></header>

  <div class="spotlight">
		<!--inicio do código do carou -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/woman_sunglasses.jpg" class="d-block w-100" alt="...">
      <p><a href="#">Link para o conteudo</a></p>
    </div>
    <div class="carousel-item">
      <img src="img/mulher_triste.jpg" class="d-block w-100" alt="...">
      <p><a href="#">A mulher triste voltou, Thais</a></p>
    </div>
    <div class="carousel-item">
      <img src="img/codigo_azul.jpg" class="d-block w-100" alt="...">
      <p><a href="#">Matrix?</a></p>
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

 <main>
	 <div class="container">
    <div class="coluna-conteudo">
      <div class="conteudo">
        <div class="conteudo-imagem">
          <img src="img/music.jpg" />
        </div>
        <div class="conteudo-principal">
          <a href="#">Lorem ipsum dolor sit.</a>
          <div class="conteudo-atributos">
            <ul>
              <li><span class="tag-rosa">Conteudo-Tag</span></li>
              <li>Data</li>
            </ul>
          <div class="conteudo-atributos-comentarios">
            22
          </div>
        </div>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, tenetur. Suscipit ullam libero autem consectetur doloribus debitis, quo delectus asperiores rem harum magnam quasi ut, illum temporibus laudantium laboriosam recusandae architecto illo nemo, pariatur vel! Magnam alias minima commodi autem velit. Incidunt blanditiis accusamus ipsam non quos quidem fugit et?</p>
        </div>
      </div>
      <div class="conteudo">
        <div class="conteudo-imagem">
          <img src="img/column_woman_glasses.jpg" />
        </div>
        <div class="conteudo-principal">
          <a href="#">Lorem ipsum dolor sit amet consectetur.</a>
          <div class="conteudo-atributos">
            <ul>
              <li><span class="tag-verde">Conteudo-Tag</span></li>
              <li>Data</li>
            </ul>
          <div class="conteudo-atributos-comentarios">
            8
          </div>
        </div>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, tenetur. Suscipit ullam libero autem consectetur doloribus debitis, quo delectus asperiores rem harum magnam quasi ut, illum temporibus laudantium laboriosam recusandae architecto illo nemo, pariatur vel! Magnam alias minima commodi autem velit. Incidunt blanditiis accusamus ipsam non quos quidem fugit et?</p>
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
        <img src="img/hands.jpg" />
        <a href="#">Sua ajuda mantem nosso site vivo e independente</a>
      </div>
    </div>
  </div>
 </main>
 
 <footer><?php include 'footer.php'?></footer>

</body>
</html>