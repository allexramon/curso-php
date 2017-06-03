<?php 

	function ola($texto, $periodo = "Bom dia!"){
		return "Olá $texto, $periodo<br>";
	}

	function ola2(){
		$argumentos = func_get_args();
		return $argumentos;
	}

	//var_dump(ola2("Bom dia", "Ramon!"));
	echo "<br>";
	echo "<pre>";
	print_r( ola2("Bom dia", "Ramon!","Como está a família?","Está bem mesmo?")); //posso acrescentar quantos informações quiser, automaticamente vai criando mais posições no array
	echo "</pre>";

	echo "<br>##########################<br>";
	echo ola("Alex");
	echo ola("","Boa noite!");
	echo ola("Maria","Boa noite!");
	echo ola("João", "");