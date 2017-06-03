<?php 
class Documento{
	private $numero;

	public function getNumero(){
		return $this->numero;
	}
	public function setNumero($num){
		$this->numero=$num;
	}

}

class CPF extends Documento{
	public function validaCPF(){
		$numCPF = $this->getNumero();
		if(strlen($numCPF) == 11){
			return true;
		}
		
	} 
}

$doc = new CPF();
$doc->setNumero("9952523162");

if($doc->validaCPF()){
	echo "CPF: ".$doc->getNumero()." é válido!";
}else{
	echo "CPF: ".$doc->getNumero()." não é válido!";
}


 ?>