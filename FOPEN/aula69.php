<?php 

//fopen ele pede dois parametros, o primeiro é o camainho do arquivo, o segundo o arquivo
//na documentação php informa com mais clareza
// o W+ vai caso vc atualize a pagina ele vai remover a informação anterior e colocar a nova

//$file = fopen("log.txt","w+");

//a+ vai adicionar nova informações deixando a anterior
$file = fopen("log.txt","a+");

fwrite($file,date("\n Y-m-d H:i:s")."\r\n");

//por fim precisa encerrar 
fclose($file);

echo "arquivo criado com sucesso!";


 ?>