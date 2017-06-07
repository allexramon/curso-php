<?php

class Usuario {

	private $idarquivo;
	private $arquivo;
	private $dtcadastro;

	public function getIdarquivo(){
		return $this->idarquivo;
	}

	public function setIdarquivo($value){
		$this->idarquivo = $value;
	}

	public function getArquivo(){
		return $this->arquivo;
	}

	public function setArquivo($value){
		$this->arquivo = $value;
	}

	public function getDtcadastro(){
		return $this->dtcadastro;
	}

	public function setDtcadastro($value){
		$this->dtcadastro = $value;
	}

public function loadById($id){

	$sql = new Sql();
	$results = $sql->select("SELECT * FROM tb_arquivos WHERE idarquivo = :ID", array(":ID"=>$id));

	if (count($results) > 0) {
		$row = $results[0];
  	}
	$this->setData($results[0]);
}
//vantagem do metodo ser estatico é poder chamar direto sem instancia-lo.
public static function getList(){
	$sql = new Sql();
	return $sql->select("SELECT * FROM tb_arquivos ORDER BY dtcadastro;");

}

public function setData($data){
	$this->setIdusuario($data['idarquivo']);
	$this->setDeslogin($data['arquivo']);
	$this->setDtcadastro(new DateTime($data['dtcadastro']));
}

public function insert(){
	$sql = new Sql();
	//para chamar a procedure em sql é utilizado a palavra chave CALL e entre parênteses 
	$results = $sql->select("CALL sp_usuarios_insert(:NOME)", array(
		':NOME'=>$this->getDesnome()		
	));
	if (count($results) > 0) {
		$this->setData($results[0]);
	}
}


//dentro do paremetro tem o ="" que evitar ser obrigatório informa sempre o login e senha
public function __construct($login = "", $password = ""){
	$this->setDeslogin($login);
	$this->setDessenha($password);

}

public function __toString(){
	return json_encode(array(
		"idusuario"=>$this->getIdusuario(),
		"deslogin"=>$this->getDeslogin(),
		"dessenha"=>$this->getDessenha(),
		"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
		));

	}

}

?>