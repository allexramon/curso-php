<?php 
include_once("classe/conexao.php");
	/*
$msg = false;

if(isset($_FILE['arquivo'])){

	$extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
	$novo_nome = md5(time()).$extensao;
	$diretorio = "upload/";

	move_uploaded_file($_FILES['arquivo']['name'], $diretorio.$novo_nome);

	/*
	$stmt = $conn->prepare("INSERT INTO tb_arquivo(id, arquivo, dtcadastro) VALUES(?,?,?)");
	
	$stmt->bind_param("sss", $id, $arquivo, $dt);
	$id = "";
	$aquivo = $novo_nome;
	$dt = "NOW()";
	if ($_FILE['arquivo']){
		$stmt->execute();
	}

	}
	
	
	if(!$conn->connect_error){
		$msg = "Conexão ok";
	}else{
		$msg="Not Conexão";
	}

*/

 ?>

<h1>Upload de arquivos</h1>

<?php 

//if($msg != false) echo "<p>$msg</p>;";

$stmt = $conn->prepare("INSERT INTO tb_arquivo(arquivo, dtcadastro) VALUES(?,?)");

	$stmt->bind_param("ss", $arquivo, $dt);
	//$id = "";
	$aquivo = "aquivo tau";
	$dt = "NOW()";

	$stmt->execute();

	var_dump($stmt);
?>

<form action="upload.php" method="FILE" enctype="multipart/form-data">
	Arquivo:<input type="file" required name="arquivo">
	<input type="submit" name="enviar" value="Enviar">

</form>

