<?php 
//conexão
require_once 'db_connect.php';
//sessão
session_start()
//botão enviar
if (isset($_POST['btn-enviar'])) {
	$erros = [];
}

?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistema de Login</title>
</head>
<body>
	<h1>Login</h1>
	<form action='<<?php echo $_SERVER['PHP_SELF'];  ?>' method="POST">
		Login<input type="text" name="login"><br>
		Senha<input type="password" name="name"><br>
		<button type="submit" name="btn-enviar">Enviar</button>
	</form>
</body>
</html>