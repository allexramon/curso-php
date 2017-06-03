<?php

	$a= 10;
	function trocarValor($b){
		$b+=50;
		return $b;
	}

	echo trocarValor($a);
	echo "<br>";
	echo $a;