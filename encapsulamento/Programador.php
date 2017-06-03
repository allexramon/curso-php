<?php
require_once "aula45.php"; 

class Programador extends Pessoa{
	public function verDados(){
		echo get_class($this)."<br>";
		echo $this->nome."<br>";
		echo $this->idade."<br>";
		echo $this->senha."<br";
	}

}

//fazendo um teste na senha que é privado/ derá um erro!
$objeto = new Programador();

$objeto->verDados();


 ?>