<?php

	$morango="Fruta";
	$letra='abacaxi';
	$num=1.9;
	$num2=1;
	$pessoa = array('joao',20);

	foreach ($pessoa as &$value) {
		//GETTYPE: Retorna o tipo da variável no PHP var. Para checagem de tipo, utilize as funções is_*.
		if (gettype($value) === 'interge') $value +=10; 
		echo $value."<br>";
	}

	//print_r($pessoa);

	//var_dump($pessoa);
	echo gettype($pessoa);
	echo "<br>";
	echo gettype($value);
	echo "<br>";
	echo gettype($morango);
	echo "<br>";
	echo gettype($num);
	echo "<br>";
	echo gettype($num2);
	echo "<br>";
	echo gettype($letra);



