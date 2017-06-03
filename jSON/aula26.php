<?php
	$pessoas= array();

	array_push($pessoas, array('nome'=>'Alex', 'idade'=>26));
	array_push($pessoas, array('nome'=>'Kamila', 'idade'=>25));
	array_push($pessoas, array('nome'=>'João', 'idade'=>23));
	array_push($pessoas, array('nome'=>'Elton', 'idade'=>28));

	
	echo json_encode($pessoas);

	/*
		$json = "recebe uma valor em jSON";
		$data = json_decode($json,true); #decodificar o valor em jSON
		var_dump($data);
	
	*/


	


?>