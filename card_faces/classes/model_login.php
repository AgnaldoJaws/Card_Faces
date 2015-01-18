<?php
require_once 'DB.php';
class model_login extends DB {
	
private $login;
	private $senha;
	
	public function setLogin($login){
		
		$this->login = $login;
		
		
	}
	
	public function setSenha($senha){
		
		$this->senha = $senha;
		
		
	}
	
	public function getLogin (){
	return $this->login;
	}
	
	public function getSenha (){
	return $this->senha;
	}
	
	
	public function logar(){
	$pdo = parent::getInstance();
	
		$logar = $pdo->prepare ("select * from aluno
		where login = ? and senha = ?");
		$logar->bindvalue(1,$this->getLogin());
		$logar->bindvalue(2,$this->getSenha());
		$logar->execute();
		
		if($logar->rowCount()==1):
		$dados = $logar->fetch(PDO::FETCH_OBJ);
	    $_SESSION ['administrador'] = $dados->id_aluno;
		$_SESSION ['ra'] = $dados->ra;
		$_SESSION['logado'] = true;
		
		     return true;
		else:
		      return false;
		endif;	
	}
	
	public  function deslogar(){
			
			if(isset($_SESSION['logado'])):
			unset($_SESSION['logado']);
			
			session_destroy();
			
			header("inicial.php");
			endif;
	
	}
}

?>