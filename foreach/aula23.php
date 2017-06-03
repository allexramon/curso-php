<?php

#### Exemplo Simples
$meses = array("Janeiro", "Fevereiro", "Março");

foreach($meses as $mes){
	echo "O mês é: ".$mes."<br>";
}

echo "<br>";
echo "###############################"."<br>";

##Mostrar a posição no array:
foreach($meses as $index=>$mes){
	echo "Indece: ".$index."<br>";
	echo "O mês é: ".$mes."<br>";
} 



	// Outros exemplos Foreach //
	/*
	$a = array(1, 2, 3, 17);

	foreach ($a as $v) {


	echo "Valor atual de \$a: $v.\n";

	}

	*/

	/*
	$a = array(1, 2, 3, 17);

	$i = 0; // para exemplo somente 

	foreach ($a as $v) {

		echo "\$a[$i] => $v.\n";

		$i++; 

	}

	*/
/*
	$a = array (
		"um" => 1,
		"dois" => 2,
		"três" => 3,
		"dezessete" => 17
	);

	foreach ($a as $k => $v) {
		echo "(\$a[$k]) => ($v)<br>";

	}
 */


/* exemplo foreach 4: arrays multidimensionais
$a = array();
	$a[0][0] = "a";
	$a[0][1] = "b";
	$a[0][2] = "c";
	$a[1][0] = "w";
	$a[1][1] = "y";
	$a[1][2] = "z";

	foreach ($a as $v1) {
		foreach ($v1 as $v2) { 
			
			var_dump( "valor de V2: "."$v2");
			echo "<br>"."<br>";

		} 
	}
 */
/* exemplo foreach 5: arrays dinâmicos 



foreach (array(1, 2, 3, 4, 5) as $v) {
	echo "$v\n";

}
*/
?>