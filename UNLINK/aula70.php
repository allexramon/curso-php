<?php 

$file = fopen("teste.txt", "w+");

fclose($file);

//vai excluir o arquivo criado que foi o teste.txt
unlink("teste.txt");

echo "Arquivo removido com sucesso!";


 ?>