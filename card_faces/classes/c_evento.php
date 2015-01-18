<?php

require_once 'Crud.php';

class c_evento extends Crud{
	
	protected $table3 = 'inscricao';
	private $id_aluno = 'id_aluno';
	private $id_eve  = 'id_eve ';
	


	public function setId_aluno($id_aluno){
		$this->id_aluno = $id_aluno;
	}

	public function getId_aluno(){
		return $this->id_aluno;
	}
	
	public function setId_eve($id_eve){
		$this->id_eve = $id_eve;
	}

	public function getId_eve(){
		return $this->id_eve;
	}

	
	
	

	public function insert(){

		$sql  = "INSERT INTO $this->table3 (id_aluno,id_eve)  VALUES (:id_aluno,:id_eve)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id_aluno', $this->id_aluno);
		$stmt->bindParam(':id_eve', $this->id_eve);
		
		
		
		
		return $stmt->execute(); 

	}

	public function update($id_ins){

		
		return $stmt->execute();

	}

}