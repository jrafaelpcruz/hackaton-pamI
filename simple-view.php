<style>
  body {
    font-size:22px;
  }
</style>
<?php
  include 'config.php';
  $sql = "SELECT * FROM Contato WHERE codcontato =".$_REQUEST['codcontato'];
  $res = $conn->query($sql) or die("erro");
  $res = $res->fetch_object();
  print "
    <b>Ticket Número:</b>{$res->codcontato}<br>
    <b>Titulo:</b>".utf8_encode($res->titulo)."<br>
    <b>Categoria:</b>".utf8_encode($res->categoria)."<br>
    <b>Remetente:</b>".utf8_encode($res->nome)."<br>
    <b>Email:</b>".utf8_encode($res->email)."<br>
    <b>Data:</b>{$res->datainc}<br>
    <b>Mensagem:</b>".utf8_encode($res->mensagem)."<br>";
?>