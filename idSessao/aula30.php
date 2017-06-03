<?php
require_once("config.php");

echo session_save_path(); #mostra o local onde está sendo salvo os arquivos de sessoes
echo "<br>";
echo session_status();
?>