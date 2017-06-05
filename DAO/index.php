<?php
require_once("config.php");

//Carrega um usuário
//$root = new Usuario();
//$root->loadById(1);
//echo $root;

################
//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

#################
//carrega uma lista de usuários buscando o login
//$search = Usuario::search("alex");
//echo json_encode($search);

#################
//carrega um usuário usando login e senha
$usuario= new Usuario();
$usuario->login("joao","123");
echo $usuario;

 ?>