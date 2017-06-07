<?php
$cookie = $_COOKIE["NOME_DO_COOKIE"];

if(isset($cookie)){
	$obj =json_decode($_COOKIE["NOME_DO_COOKIE"]);

}

print_r($obj);

?>