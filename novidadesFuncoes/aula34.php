<?php
	function soma(float ...$valores):float{
		return array_sum($valores);
	}

	var_dump(soma(2,2,4,20,49));
	echo "<br>";
	echo soma(25,43);
	echo "<br>";
	echo soma(1.5,4.8);