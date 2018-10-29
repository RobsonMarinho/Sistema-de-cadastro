<!DOCTYPE html>
<html>
<head>
	<title>Sistema de Cadastro</title>
</head>
<body>
	<!--CRIANDO FORMULÁRIO-->
	<!-- dando nome ao formulário / método post	/ redireciona à page ao clicar no botão cadastrar-->
	<form name="signup" method="POST" action="cadastrando.php">
		<!--Inserindo os campos-->
		Nome: <input type="text" name="nome"/><br/><br/>
		Sobrenome: <input type="text" name="sobrenome"/><br/><br/>
		País: <input type="text" name="pais"><br/><br/>
		Estado: <input type="text" name="estado"/><br/><br/>
		Cidade: <input type="text" name="cidade"/><br/><br/>
		E-mail: <input type="text" name="email"/><br/><br/>
		Senha: <input type="password" name="senha"/><br/><br/>
		<!-- Criando botão de envio-->
		<input type="Submit" value="Cadastrar"/> 

	</form>
</body>
</html>
