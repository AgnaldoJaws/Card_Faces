<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<form action = "" method = "post">
	
	Login: <input type ="text" name = "login" /><br>	
	Senha: <input type ="text" name = "senha" /><br>
	
	<input type ="submit" value = "Enviar" name = "ok" />
	
	<?php echo isset($erro) ? $erro: '';?>
	
</form>

<?php include 'controller_login.php'; ?>
	
</body>
</html>