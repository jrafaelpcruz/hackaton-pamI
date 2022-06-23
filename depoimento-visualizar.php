<h1 class="contato-titulo">Depoimentos</h1>
<script src="js/bootstrap.min.js"></script>

<main class="depoimento-main">
  <div class="carousel-container">
    <!--inicio do código do carousel -->
    <div id="carouselExampleInterval" class="carousel slide carousel-dark" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="20000">
          <div class="depoimento-coluna">
            <div>
              <p>Previa</p>
            </div>
          </div>
        </div>
        <?php include 'depoimento-item.php'?>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </button>
    </div>
    <!-- Fim do codigo do carousel-->
  </div>
</main>
<div class="depoimento-escrever">
  <a href="?page=depoimento-escrever">Clique aqui para escrever o seu comentário</a>
</div>
