<?php 

require_once("config.php");

$sql = new Sql();

//ARQUIVO CSV --> é um arquivo formatado (exemplo: informações no excel)
$usuarios=$sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin ");

//primeiro detectar as colunas
$headers = array();
//foreach para passar coluna por coluna
foreach($usuarios[0] as $key=>$value){
	//ucfirts deixa a primeira letra maiúscula
	array_push($headers, ucfirst($key));
}


//ele espera dois parametros, o primeiro será o separador e o segundo o array ou arquivo
//echo implode(",", $headers);

$file = fopen("usuarios.csv", "w+");
fwrite($file, implode(",", $headers)."\r\n");

//primeiro foreach será nas linhas, nos registros
foreach($usuarios as $row){
	$data = array();
	//segundo foreach é no campos
	foreach ($row as $key => $value) {
		array_push($data, $value);
	}
	
	fwrite($file, implode(",", $data)."\r\n");
}

fclose($file);

echo "Arquivo CSV criando com sucesso! ";


?>