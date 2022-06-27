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
    <b>Ticket Número:</b> {$res->codcontato}<br>
    <b>Titulo:</b> {$res->titulo}<br>
    <b>Categoria:</b> {$res->categoria}<br>
    <b>Remetente:</b> {$res->nome}<br>
    <b>Email:</b> {$res->email}<br>
    <b>Data:</b> {$res->datainc}<br>
    <b>Mensagem:</b> {$res->mensagem}<br>
  ";
?>
