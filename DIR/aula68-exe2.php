<?php 
//scandir vai escanear o diretório informado mostando o que tem dentro
$images=scandir("images");
//var_dump($images);

$data = array();

//
foreach($images as $img){
	//in_array(onde procurar, array) --> ele vai negar as informações repassadas no array e entrar na condição 
	if(!in_array($img, array(".",".."))){
		$filename = "images".DIRECTORY_SEPARATOR.$img;
		//pathinfo--> obter informações uteis do arquivos 
		$info = pathinfo($filename);

		//filesize mostra o tamanho do arquivo em bits
		$info['size'] = filesize($filename);

		//inserido data de modificação
		$info['modified']= date("d/m/Y H:i:s", filemtime($filename));

		//deixar o link para acessar via url
		//str_replace -->troca um valor por outro, nesse caso estou trocando a barra invertida por a barra normal(tem que colocar  2 barras (\\) invertidas para ele entender que é uma barra (\).
		$info['url']= "http://localhost/curso-php/DIR/".str_replace("\\","/",$filename);

		//array_push vai inserir informações no array
		array_push($data, $info);
	}
}
echo json_encode($data);

 ?>