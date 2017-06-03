<?php 

setlocale(LC_ALL, "pt_BR","pt_BR.UTF-8","portuguese");

//echo strftime("%A %B");

echo "<br>";

echo ucwords(strftime("%A %d/%B/%Y %H:%M:%S %p"));

echo "<br>";

echo ucwords(strftime("%A %d/%B/%Y %H:%M:%S %p", mktime (0, 0, 0, 12, 22, 1978) ));

 ?>