<?php 

//classe mysqli que está no php 7
//servidor - usuario - senha - banco
$conn = new mysqli("localhost","root", "", "dbphp7");
if ($conn->connect_error){
	echo "Error: ".$conn->connect_error;
}

//fazendo um insert, preparando um comando para inserir no banco de dados
$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES(?,?)");

	$stmt->bind_param("ss", $login, $pass);
	$login = "user";
	$pass = "12345";

	$stmt->execute();

	//inserindo mais usuários:
	$login = "root";
	$pass = "!@#$";

	$stmt->execute();

 ?>