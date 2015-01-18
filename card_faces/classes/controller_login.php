

<?php include 'model_login.php';?>

<?php
session_start();
if(isset($_POST['ok'])):

 $login = filter_input(INPUT_POST, "login", FILTER_SANITIZE_MAGIC_QUOTES);

 $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_MAGIC_QUOTES);

    $l = new  model_login;
	$l->setLogin($login);
    $l->setSenha($senha);


	if ($l->logar()):

	header("Location: view_aluno.php");
		
	
	
		else:
		$erro = "Erro ao Logar";


endif;
endif;



?>


