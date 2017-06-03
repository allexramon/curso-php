<?php 

//classe mysqli que está no php 7
//servidor - usuario - senha - banco
$conn = new mysqli("localhost","root", "", "dbphp7");
if ($conn->connect_error){
	echo "Error: ".$conn->connect_error;
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

//poderia usar o fetch_array(), mas ele traria tudo inclusive os indeces
//No fetch_assoc() - que é um array, tras somente as informações;
while($row = $result->fetch_assoc()){
	var_dump($row);
}

 ?>