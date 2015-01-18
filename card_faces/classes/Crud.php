<?php

require_once 'DB.php';

abstract class Crud extends DB{

	protected $t_aluno;
	protected $t_inscricao;

	abstract public function insert();
	abstract public function update($id_aluno);

	public function find($id_aluno){
		$sql  = "SELECT * FROM $this->t_aluno";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id_aluno', $id_aluno, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
	}
	
	public function find2($ra){
		$sql  = "SELECT * FROM $this->t_inscricao inner join $this->t_aluno on
		$this->t_inscricao.id_aluno = $this->t_aluno.id_aluno  WHERE ra= :ra";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':ra', $ra, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
	}

	public function findAll($ra){
		$sql  = "SELECT * FROM $this->t_inscricao inner join $this->t_aluno on
		$this->t_inscricao.id_aluno = $this->t_aluno.id_aluno  WHERE ra= :ra";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':ra', $ra, PDO::PARAM_INT);
		
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function delete($id_aluno){
		$sql  = "DELETE FROM $this->table WHERE id_aluno = :id_aluno";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id_aluno', $id_aluno, PDO::PARAM_INT);
		return $stmt->execute(); 
	}

}