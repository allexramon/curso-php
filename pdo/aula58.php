<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin,dessenha) VALUES (:LOGIN, :PASSWORD)");

$login = "joao carlos";
$password = "lala123";

//fazer baig
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Inserido com sucesso!!!!";



 ?>