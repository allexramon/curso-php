<?php
session_start();
#session_unset(); #vai limpar todas as variáveis caso não seja especificado uma, detro do argumento;
#session_destroy(); #limpa inclusive o usuário e todas as variáveis da pagina;
var_dump( $_SESSION["nome"]);