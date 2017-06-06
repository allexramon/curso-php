<?php 

$name= "images";
//como verificar se um diretorio existe
if(!is_dir($name)){
	//mkdir vai criar o diretório
	mkdir($name);
	echo "Diretorio Criando com sucesso!";
}else{
	//rmdir vai excluir o diretório
	rmdir($name);
	echo "Já existe o diretorio: $name, agora está apagado!";
}

 ?>