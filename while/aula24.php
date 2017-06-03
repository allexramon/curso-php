<?php

	#sortear números aleatorios, quando chegar em 3 para o laço;
	#só vai excutar se a condição for true
	/*
	$condicao = true;
	while($condicao){
		$numero = rand(1,10);
		if($numero === 3){
			echo "trê!!!!";
			$condicao = false;
		}
		echo $numero." | ";
	}
	*/
	
	#Faça um código onde será dado um desconto a cada compra de 100 reais
	#vai executar uma vez mesmo a condição sendo falsa
	echo "<br>";
	echo "########################"."<br>";
	$total = 600;
	$desconto = 0.9;
	$contador=0;
	do{
		$total *= $desconto;
		$contador ++;
	}while($total > 100);
		echo $total."<br>";
		echo $contador." | ";