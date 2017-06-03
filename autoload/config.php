<?php 
//exemplo 2: Comom configurar o autoload para encontrar diretorios, pastas arquivos em outras pastas.
function incluirClasses($nomeClasse){
	if(file_exists($nomeClasse.".php") === true){
		require_once($nomeClasse.".php");
	}
}

spl_autoload_register("incluirClasses");

//procurando arquivos na pasta "Abstratas"
spl_autoload_register(function($nomeClasse){
	if(file_exists("Abstratas".DIRECTORY_SEPARATOR.$nomeClasse.".php") === true){
		require_once("Abstratas".DIRECTORY_SEPARATOR.$nomeClasse.".php");
	}
});

$carro= new DelRey();
$carro->acelerar(80);



 ?>