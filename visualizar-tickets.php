<div class='conteudo-principal fake-listas'>
  <h1>Notícias:</h1>
  <ul>
<?php 
    $sql = "SELECT * FROM Contato WHERE categoria = 'noticia' ORDER BY codcontato DESC;";
    $res = $conn->query($sql) or die("erro");
    $qtd = $res->num_rows;
    if($qtd > 0) {
      while($row = $res->fetch_object()) {
        print "
            <li><a href='simple-view.php?codcontato={$row->codcontato}' target='_blank'>{$row->titulo}</a></li>
        ";
      }
    } else {
      print "Nada consta";
    }
?>
  </ul>
  <br>
  <h1>Contato:</h1>
  <ul>
<?php 
    $sql = "SELECT * FROM Contato WHERE categoria = 'contato' ORDER BY codcontato DESC;";
    $res = $conn->query($sql) or die("erro");
    $qtd = $res->num_rows;
    if($qtd > 0) {
      while($row = $res->fetch_object()) {
        print "
            <li><a href='simple-view.php?codcontato={$row->codcontato}' target='_blank'>{$row->titulo}</a></li>
        ";
      }
    } else {
      print "Nada consta";
    }
?>
  </ul>

  <br>
  <h1>Denúncia:</h1>
  <ul>
<?php 
    $sql = "SELECT * FROM Contato WHERE categoria = 'denuncia' ORDER BY codcontato DESC;";
    $res = $conn->query($sql) or die("erro");
    $qtd = $res->num_rows;
    if($qtd > 0) {
      while($row = $res->fetch_object()) {
        print "
            <li><a href='simple-view.php?codcontato={$row->codcontato}' target='_blank'>{$row->titulo}</a></li>
        ";
      }
    } else {
      print "Nada consta";
    }
?>
  </ul>

  <br>
  <h1>Sugestão:</h1>
  <ul>
<?php 
    $sql = "SELECT * FROM Contato WHERE categoria = 'sugestao' ORDER BY codcontato DESC;";
    $res = $conn->query($sql) or die("erro");
    $qtd = $res->num_rows;
    if($qtd > 0) {
      while($row = $res->fetch_object()) {
        print "
            <li><a href='simple-view.php?codcontato={$row->codcontato}' target='_blank'>{$row->titulo}</a></li>
        ";
      }
    } else {
      print "Nada consta";
    }
?>
  </ul>
</div>