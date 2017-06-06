<?php 

$filename="usuarios.csv";

if(file_exists($filename)){

	//O r seguinifica leitura
	$file=fopen($filename,"r");

	//pegar a primeira linha - cabeçalho
	//$headers = fgets($file);

	$data=array();

	//usando explode para transforma a virgula em array (ele explode toda vez que tem uma virgula)
	$headers = explode(",",fgets($file));
	
	while($row = fgets($file)){
		$rowData = explode(",",$row);
		$linha = array();

		for($i=0; $i<count($headers); $i++){
			$linha[$headers[$i]]=$rowData[$i];
		}
		array_push($data, $linha);
	}

	fclose($file);
	echo json_encode($data);
}

 ?>