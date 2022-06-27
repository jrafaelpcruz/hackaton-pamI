<!DOCTYPE html>
<html lang="ptbr">
<link rel="stylesheet" href="styles/styles.css">
  <!-- caroulsel - extraido do bootstrap -->
  <link rel="stylesheet" href="styles/carousel.css">
  <!--google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital@1&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Placeholder Title</title>
</head>
<body>
<header><?php include 'header.php'?></header>
 <div>
  <?php
  include "config.php";
  switch(@$_REQUEST["page"]) {
    case 'contato':
      include 'contato.php';
      break;
    case 'depoimento-visualizar';
      include 'depoimento-visualizar.php';
      break;
    case 'depoimento-escrever';
      include 'depoimento-escrever.php';
      break;
    case 'conteudo':
      include 'conteudo.php';
      break;
    case 'conteudo-inserir-sucesso':
      include 'conteudo-inserir-sucesso.php';
      break;
    case 'proc':
      include 'proc.php';
      break;
    case 'fake':
      header("Location:fake.php");
      break;
    default:
     include "inicio.php";
  }
  ?>
 <div>
<footer><?php include 'footer.php'?></footer>
</body>
</html>