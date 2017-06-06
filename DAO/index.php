<?php
require_once("config.php");

//Carrega um usuário buscando pelo id
//$root = new Usuario();
//$root->loadById(1);
//echo $root;

################
//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

#################
//carrega um usuário buscando pelo login
//$search = Usuario::search("a");
//echo json_encode($search);

#################
//carrega um usuário usando login e senha
//$usuario= new Usuario();
//$usuario->login("joao","123");
//echo $usuario;

//Criando um novo usuário
//$aluno = new Usuario("Joana", "joana123");
//$aluno->insert();
//echo $aluno;

$usuario = new Usuario();

$usuario->loadById(8);

$usuario->update("professor", "1234!@#");

echo $usuario;

 ?>