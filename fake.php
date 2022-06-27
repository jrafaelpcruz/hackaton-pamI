<!DOCTYPE html>
<html lang="ptbr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital@1&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
  <title>FAKE</title>
</head>
<body class="fake-bkg1">
<header><h1>Placeholder</h1></header>
  <h1 class="contato-titulo">Gerenciamento Fake</h1>
  <main>
    <div class="container">
      <div class="coluna-conteudo">
        <div class="conteudo">
          <?php 
            include "config.php";
            switch(@$_REQUEST["fakezao"]) {
              case 'conteudo-inserir':
                include 'conteudo-inserir.php';
                break;
              case 'visualizar-tickets':
                include 'visualizar-tickets.php';
                break;
              default:
                echo "<h1>Bem vindo(a),<br>Selecione uma opção ao lado:</h1>";
            }
          ?>
        </div>   
      </div>
      <div class="conteudo-left">
        <div class="conteudo-left-div">
          <h1>Gerenciamento:</h1>
          <a href="?fakezao=conteudo-inserir">Inserir Conteudo</a>
          <a href="?fakezao=visualizar-tickets">Visualizar Tickets</a>
          <a href="index.php">Retornar ao site</a>
        </div>
      </div> 
    </div>
  </main>
</body>
</html>