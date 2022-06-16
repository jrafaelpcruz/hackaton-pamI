<?php
 switch (@$_REQUEST["acao"]) {
		case 'contato-salvar':
		$titulo = $_POST['titulo'];
		$categoria = $_POST['categoria'];
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$data = date("Y/m/d");
		$conteudom = $_POST['conteudom'];
		
		$sql = "INSERT INTO Contato (codcontato, titulo, categoria, nome, email, datainc, mensagem) VALUES (NULL, '{$titulo}','{$categoria}','{$nome}','{$email}','{$data}','{$conteudom}');";
		$res = $conn->query($sql) or die("erro");
		header("Location: index.php?page=contato-sucesso");
		break;
 }

?>