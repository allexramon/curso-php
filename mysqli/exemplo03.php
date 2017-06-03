<?php 

//classe mysqli que está no php 7
//servidor - usuario - senha - banco
$conn = new mysqli("localhost","root", "", "dbphp7");
if ($conn->connect_error){
	echo "Error: ".$conn->connect_error;
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");


//convertendo para jSON
$data = array();

while($row = $result->fetch_assoc()){
	array_push($data, $row);
}

echo json_encode($data);

 ?>