<?php

/**
 * 
 */
require_once 'database.php';
class cliente 
{
	private $email;
	private $nome;
	private $telefone;
	private $comentarios;
	private $db;

	public function __construct()
	{
		$this->db = new Database();
	}

	public function getemail(){
		return $this->email ;
	}

	public function setemail($value){
		$this->email =$value;
	}

	public function getnome(){
		return $this->nome ;
	}

	public function setnome($value){
		$this->nome =$value;
	}

	public function gettelefone(){
		return $this->telefone ;
	}

	public function settelefone($value){
		$this->telefone =$value;
	}

	public function getcomentarios(){
		return $this->comentarios ;
	}

	public function setcomentarios($value){
		$this->comentarios =$value;
	}






	public function cadastrar(){
		
		try{
		$sql="insert into cadastro (nome,email,telefone,comentarios) values (:nome,:email,:telefone,:comentarios)";
			$stmt = $this->db->getConexao()->prepare($sql);
			$ret = $stmt->execute(array("nome"=>$this->getnome(),"email"=>$this->getemail(), "telefone"=>$this->gettelefone(), "comentarios"=>$this->getcomentarios()));
			if ($ret)
				return true;
			else
				return false;

		}catch(Exception $e){
			die($e->getMessage());
		}
	}

}

?>