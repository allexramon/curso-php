<?php 

	echo "aula 57";
	echo "<br/>";

	$conn = new PDO("sqlsrv:Database=dbphp7; server=localhost\SQLEXPRESS1.dbphp7; ConnectionPooling=0;", "sa", "root");

	$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin;");

	$stmt->execute();

	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($results);




 ?>