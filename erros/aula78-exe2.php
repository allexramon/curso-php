<?php 
//http://localhost/curso-php/erros/aula78-exe2.php?nome=Hcode

//escolhe qual erro quer que apareça
error_reporting(E_ALL & ~E_NOTICE);

$nome = $_GET["nome"];

echo $nome;


 ?>