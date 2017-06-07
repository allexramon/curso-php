
<!DOCTYPE html>
<html>
<head>
	<title>Upload de Arquivos</title>
</head>
<body>
<!--
enctype permite informa o tipo de informação que está enviando
-->
<form method="POST" enctype="multipart/form-data">
	<input type="text" name="nome" placeholder="Nome do arquivo">
	<input type="file" name="fileUpload">
	<button type="submit">Enviar</button>
</form>
</body>
</html>

<?php
	//verificar method post
	//request_method -> guada o tipo da solicitação(sé get ou post ...)
	if($_SERVER["REQUEST_METHOD"] === "POST"){
		//guarda informações no $file 
		$file = $_FILES["fileUpload"];
		//tratar erro
		if($file["error"]){
			throw new Exception("Erro:".$file["error"]);
		}
		//guarda o nome do diretorio
		$dirUploads="uploads";
		//VERIFICANDO SE EXISTE O DIRETÓRIO
		if(!is_dir($dirUploads)){
			//CRAINDO DIRETORIO
			mkdir($dirUploads);
		}		

		//enviar para o banco
		if(move_uploaded_file($file["tmp_name"], $dirUploads.DIRECTORY_SEPARATOR.$file["name"])){
			
			$arquivoCrip = base64_encode($file["name"]);

			echo "Upload realizado com sucesso!!!";

		}else{
			throw new Exception("Não foi possível realizar upload!");
			
		}
	}

 ?>