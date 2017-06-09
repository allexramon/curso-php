<?php 

//
try{

	throw new Exception("Houve um erro.", 400);
	

//cath o que quer capturar caso tenha algum erro
}catch(Exception $e){
	echo json_encode(array(
		"message"=>$e->getMessage(),
		"line"=>$e->getLine(),
		"file"=>$e->getFile(),
		"code"=>$e->getCode()
	));

}

 ?>