<?php 
	function __autoload($nomeClasse){
		var_dump($nomeClasse."<br>");
		require_once("$nomeClasse.php");
	}

	$carro = new DelRey();
	$carro->acelerar(80);
	$carro->empurrar();
	$carro->trocarMacha(1);


 ?>