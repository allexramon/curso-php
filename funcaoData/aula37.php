<?php 

echo "TimeStamp: ".time();
echo "<br>";
echo "Data do servidor".date("d/m/Y H:i:s");
echo "<br>";
echo "Dia da semana + data: ".date("l, d/m/Y");

echo "<br>";
echo "#####################";
echo "<h1>Data com o timestamp fornecido:</h1>";
echo "<br>";
echo "Variável: ".'$ts'." vai receber o TimeStamp do dia 2001-09-11";

$ts= strtotime("2001-09-11");
echo "<br>";
echo "Timestamp: ".$ts;
echo "<br>";
echo "Data: ".date("l, d/m/Y H:i:s",$ts);




 ?>