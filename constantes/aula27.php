<?php
define("SERVIDOR", "127.0.0.1"); #Criando uma variavel constante, onde é necessário colocar o nome e o valor
echo SERVIDOR;

echo "<br>";
#Exemplo de Array constante no php 7
define("BANCO_DE_DADOS",['127.0.0.1', 'root', 'password', 'test']);

var_dump(BANCO_DE_DADOS);




?>