<?php 
$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 3;

$stmt->execute(array($id));
//Rollback vai deixar na fila para exclusão, caso não dê certo poderá cancelar a operação 
//$conn->rollback();

//Commit vai confirmar a execução
$conn->commit();

echo "ID:[$id] excuído - Commit para confirmar a exclusão!!!!";



 ?>