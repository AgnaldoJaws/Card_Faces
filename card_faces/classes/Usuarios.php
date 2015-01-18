<?php include "Crud.php"; ?>

<?php



class Usuarios extends Crud{
	
	protected $t_aluno = 'aluno';
	protected $t_inscricao = 'inscricao';
	private $nome_aluno = 'nome_aluno';
	private $bairro = 'bairro';
	private $cidade = 'cidade';
    private $estado = 'estado';
	private $logradouro = 'logradouro';
	private $complemento = 'complemento';
	private $ra = 'ra';
	private $cpf = 'cpf';
	private $rg = 'rg';
	private $celular = 'celular';
	private $telefone = 'telefone';
	private $email = 'email';
	private $cep = 'cep';
	private $endereco = 'endereco';
	private $login = 'login';
	private $senha = 'senha';


	public function setNome_aluno($nome_aluno){
		$this->nome_aluno = $nome_aluno;
	}

	public function getNome_aluno(){
		return $this->nome_aluno;
	}

	public function setBairro($bairro){
		$this->bairro = $bairro;
	}

	public function getBairro(){
		return $this->bairro;
	}
	
	public function setCidade($cidade){
		$this->cidade = $cidade;
	}

	public function getCidade(){
		return $this->cidade;
	}
	
	public function setEstado($estado){
		$this->estado = $estado;
	}

	public function getEstado(){
		return $this->estado;
	}
	
	
	public function setLogradouro($logradouro){
		$this->logradouro = $logradouro;
	}

	public function getLogradouro(){
		return $this->logradouro;
	}
	
	public function setComplemento($complemento){
		$this->complemento = $complemento;
	}

	public function getComplemento(){
		return $this->complemento;
	}
	
	public function setRa($ra){
		$this->ra = $ra;
	}

	public function getRa(){
		return $this->Ra;
	}
	
	public function setCpf($cpf){
		$this->cpf = $cpf;
	}

	public function getCpf(){
		return $this->cpf;
	}
	
	public function setRg ($rg){
		$this->rg  = $rg;
	}

	public function getRg (){
		return $this->rg;
	}
	
	
	public function setCelular($celular){
		$this->celular = $celular;
	}

	public function getCelular(){
		return $this->celular;
	}
	
	
	
	
	
	
	public function setTelefone($telefone){
		$this->telefone = $telefone;
	}

	public function getTelefone(){
		return $this->telefone;
	}
	
	public function setEmail($email){
		$this->email = $email;
	}

	public function getEmail(){
		return $this->email;
	}
	
	public function setCep($cep){
		$this->cep = $cep;
	}

	public function getCep(){
		return $this->cep;
	}
	
	public function setEndereco($endereco){
		$this->endereco = $endereco;
	}

	public function getEndereco(){
		return $this->endereco;
	}
	
	
	public function setLogin($login){
		$this->login = $login;
	}

	public function getLogin(){
		return $this->login;
	}
	
	public function setSenha($senha){
		$this->senha = $senha;
	}

	public function getSenha(){
		return $this->senha;
	}
	
	
	
	

	public function insert(){

		$sql  = "INSERT INTO $this->t_aluno (nome_aluno,bairro,cidade,estado,logradouro,complemento,ra,cpf,rg,celular,telefone,email,cep,endereco,login,senha)  VALUES (:nome_aluno,:bairro,:cidade,:estado,:logradouro,:complemento,:ra,:cpf,:rg,:celular,:telefone,:email,:cep,:endereco,:login,:senha)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome_aluno', $this->nome_aluno);
		$stmt->bindParam(':bairro', $this->bairro);
		$stmt->bindParam(':cidade', $this->cidade);
		$stmt->bindParam(':estado', $this->estado);
		$stmt->bindParam(':logradouro', $this->logradouro);
		$stmt->bindParam(':complemento', $this->complemento);
		$stmt->bindParam(':ra', $this->ra);
		$stmt->bindParam(':cpf', $this->cpf);
	    $stmt->bindParam(':rg', $this->rg);
		 $stmt->bindParam(':celular', $this->celular);
		$stmt->bindParam(':telefone', $this->telefone);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':cep', $this->cep);
		$stmt->bindParam(':endereco', $this->endereco);
		$stmt->bindParam(':login', $this->login);
		$stmt->bindParam(':senha', $this->senha);
		
		
		return $stmt->execute(); 

	}

	public function update($cod_cidade){

		$sql  = "UPDATE $this->table SET nome = :nome  WHERE cod_cidade= :cod_cidade";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		
		$stmt->bindParam(':cod_cidade', $cod_cidade);
		return $stmt->execute();

	}

}