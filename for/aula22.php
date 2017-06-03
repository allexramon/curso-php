<?php
	
	echo "################################"."<br>";
	#exemplo simples
	for($i=0;$i<10;$i++){
		echo $i." | ";

	}
	
	echo "<br>";
	echo "###############################"."<br>";
	
	#pular de 5 em 5	
	for($i=0;$i<100;$i+=5){
		echo $i." | ";
	}
	
	echo "<br>";
	echo "###############################"."<br>";

	#Faça um código de 0 a mil de 10 em 10, mas não pode aparecer os números entre 200 e 400
	for($i=0;$i<1000;$i+=10){ 
		if($i>200 && $i<400)continue; ##caso nao queira mostrar o 200 e 400 coloca "=" nos sinais 
		echo $i." | ";
	}

	echo "<br>";
	echo "###############################"."<br>";

	#Utilizando o mesmo código, faça um exemplo onde não vai mostra os números a parti de 800

	for ($i=0;$i<1000;$i+=10){
		if($i>200 && $i<400)continue;
		if($i === 800)break;
		echo $i." | ";
	}

	echo "<br>";
	echo "###############################"."<br>";

	#Agora eu quero um código onde busque modelos de carros do meu de 100 anos atrás até o ano atual:
	echo "<select>";
	for($i=date("Y"); $i>=date("Y")-100; $i--){
		echo '<option value="'.$i.'">'.$i.'</option>';
	}
	echo "</select>";
	
	echo "<br>";
	echo "###############################"."<br>";
?>