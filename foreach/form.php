<form>
	<input type="text" name="nome">
	<input type="date" name="nascimento">
	<input type="email" name="email">
	<input type="submit" value="OK">
</form>

<?php

if(isset($_GET)){
	foreach($_GET as $key=> $value){
		echo "nome do campo: ".$key."<br>";
		echo "valor do campo: ".$value;
		echo "<hr>";
	}
}

?>