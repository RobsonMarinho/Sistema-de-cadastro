<!DOCTYPE html>
<html>
<head>
	<title>Cadastrando</title>
</head>
<body>

	

	<!--CRIANDO CONEXAO COM O DB-->
	<?php

//Vai capturar todas as informações digitadas na página criando-cadastro-02.php
	$nome=$_POST['nome'];		
	$sobrenome=$_POST['sobrenome'];
	$pais=$_POST['pais'];
	$estado=$_POST['estado'];
	$cidade=$_POST['cidade'];
	$email=$_POST['email'];
	$senha=$_POST['senha'];
	$sql= mysqli_query($conexao, "INSERT INTO usuarios(nome, sobrenome, pais, estado, cidade, email, senha)
		VALUES ('$nome', '$sobrenome', '$pais', '$estado', '$cidade', '$email', '$senha')");
	var_dump($sql);
	echo "<center><h1>Cadastro efetuado com sucesso! </h1></center>";
	mysqli_close($conexao);
	?>


</body>
</html>