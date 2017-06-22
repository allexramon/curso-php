<?php 

$id = (isset($_GET["id"]))?$_GET["id"]:1;

//evitando sql inject
// is_numeric: verificar se é numerico
// strlen: conta a qunatidade de caracteres
if (!is_numeric($id) || strlen($id)>5){
	exit("Te peguei!!!");
}

$conn = mysqli_connect("localhost", "root","", "dbphp7");

$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id ";

$exec = mysqli_query($conn, $sql);

while($resultado = mysqli_fetch_object($exec)){
	echo $resultado->deslogin."<br>";
	//var_dump($resultado);
}

//como pegar todos os dados de um banco com inject
//http://localhost/curso-php/seguranca/aula90.php?id=6 or 1=1 --
 ?>