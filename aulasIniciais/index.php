<?php
	
	$nome = "Teste 01"."<br>";

function teste(){
	global $nome;
	echo $nome;
}

function teste2(){
	$nome = "Teste 02";
	echo $nome;
}

teste();

teste2();