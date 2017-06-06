<?php 

//criando uma pasta

if (!is_dir("images")) mkdir("images");

foreach (scandir("images") as $item) {
	if(!in_array($item, array(".",".."))){
		unlink("images/".$item);
	}
}

echo "Arquivos do diretório apagado com sucesso!";


 ?>