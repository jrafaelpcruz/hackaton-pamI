<div class="contato-sucesso">
  <h1>Conteudo incluido!</h1>
  <img src="img/socios.png" />
  <?php
    switch(@$_REQUEST["retornar"]) {
      case 'contatois':
        echo "<a href='?page=default'>Retornar</a>";
        break;
      case 'conteudois':
        $sql = "SELECT MAX(codCtu) as 'last' FROM Conteudo;";
        $res = $conn->query($sql) or die("erro");
        $res = $res->fetch_object();
        echo "<a href ='?page=conteudo&codCtu={$res->last}'>Visualisar</a>";
        break;
      case 'depoimentois':
        echo "<a href ='?page=depoimento-visualizar'>Retornar</a>";
        break;
    }
  ?>
</div>