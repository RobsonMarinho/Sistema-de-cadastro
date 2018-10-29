<!DOCTYPE html>
<html>
<head>
	<title>Cadastrando</title>
</head>
<body>

	<!--CRIANDO CONEXAO COM O DB-->
	<?php

	$host = "localhost";
	$user = "root";
	$pass = "";
	$banco = "cadastro";
//Se alguma variável estiver errada, exibirá a mesma
	//$conexao =  mysqli_connect($host, $user, $pass) or die (mysqli_error());
	$conexao = mysqli_connect('localhost', 'root', '');
	if (!$conexao) {
		die('Could not connect: ' . mysql_error());
	}
	echo 'Connected successfully';
	mysqli_close($conexao);
//Se o DB estiv com erro, informará.
//	mysqli_select_db($banco) or die (mysqli_error());
//
//
	?>

	<?php

//Vai capturar todas as informações digitadas na página criando-cadastro-02.php
	$nome = $_POST['nome'];	
	$sobrenome = $_POST['sobrenome'];
	$pais = $_POST['pais'];
	$estado = $_POST['estado'];
	$cidade = $_POST['cidade'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$sql = mysqli_query("INSERT INTO usuarios (nome, sobrenome, pais, estado, cidade, email, senha ) 
		VALUES('$nome','$sobrenome', '$pais', '$estado', '$cidade', '$email', '$senha') ");

	echo "<center><h1>Cadastro efetuado com sucesso! </h1></center>";
	?>


</body>
</html>
