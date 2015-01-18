<?php

require_once 'Crud.php';

class eventos extends Crud{


    protected $table2 = 'lote';
	private $data_abertura = 'data_abertura';
	private $hora_inico = 'hora_inico';
    private $hora_termino = 'hora_termino';
	private $tipo_evento = 'tipo_evento';
	private $carga_horaria = 'carga_horaria';
	private $palestrante_tema = 'palestrante_tema';
	private $descricao = 'descricao';
	private $valor = 'valor';
	
	
	
	public function setData_abertura($data_abertura){
		$this->data_abertura = $data_abertura;
	}

	public function getData_abertura(){
		return $this->data_abertura;
	}
	
	public function setHora_inico($hora_inico){
		$this->hora_inico = $hora_inico;
	}

	public function getHora_inico(){
		return $this->hora_inico;
	}
	
	
	public function setHora_termino($hora_termino){
		$this->hora_termino = $hora_termino;
	}

	public function getHora_termino(){
		return $this->hora_termino;
	}


	public function setTipo_evento ($tipo_evento){
		$this->tipo_evento  = $tipo_evento;
	}

	public function getTipo_evento( ){
		return $this->tipo_evento ;
	}
	
	public function setCarga_horaria ($carga_horaria){
		$this->carga_horaria  = $carga_horaria;
	}

	public function getCarga_horaria( ){
		return $this->carga_horaria ;
	}



    public function setPalestrante_tema  ($palestrante_tema ){
		$this->palestrante_tema   = $palestrante_tema;
	}

	public function getPalestrante_tema ( ){
		return $this->palestrante_tema  ;
	}
	
	 public function setDescricao  ($descricao){
		$this->descricao   = $descricao;
	}

	public function getDescricao ( ){
		return $this->descricao  ;
	}
	
	public function setValor  ($valor){
		$this->valor   = $valor;
	}

	public function getValor ( ){
		return $this->valor ;
	}


public function insert(){

		$sql  = "INSERT INTO $this->table2
		(data,hora_inico,hora_termino,tipo_evento,
		carga_horaria,palestrante_tema,descricao,valor)  
		VALUES 
		(:data_abertura,:hora_inico,:hora_termino,:tipo_evento,
		:carga_horaria,:palestrante_tema,:descricao,:valor)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':data_abertura', $this->data_abertura);
	$stmt->bindParam(':hora_inico', $this->hora_inico);
	$stmt->bindParam(':hora_termino', $this->hora_termino);
	$stmt->bindParam(':tipo_evento', $this->tipo_evento);
	$stmt->bindParam(':carga_horaria', $this->carga_horaria);
	$stmt->bindParam(':palestrante_tema', $this->palestrante_tema);
	$stmt->bindParam(':descricao', $this->descricao);
	$stmt->bindParam(':valor', $this->valor);
	
		return $stmt->execute(); 

	}




public function update($id_lote){

		
		return $stmt->execute();

	}





}