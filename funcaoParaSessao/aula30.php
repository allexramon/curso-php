<?php

echo session_start();
echo "<br>";
echo session_status();

$_SESSION["nome"]="HCode";

session_destroy();

echo "<br>";

switch (session_status()) {
	case PHP_SESSION_DISABLED:
	echo "As sessões estão desabilitadas!";
	break;

	case PHP_SESSION_NONE:
	echo "As sessões estão habilitadas, mas nenhuma existe!";
	break;

	case PHP_SESSION_ACTIVE:
	echo "As sessões estão habilitadas, um existe!";
	break;
}