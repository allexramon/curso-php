<?php 

header("Content-Type: image/png");

//imagecreate recebe a largura e altura
$image = imagecreate(256,256);

//criar palheta de cores, primeira cor altomaticamente é a cor de fundo
$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);

//imagem gerada
imagestring($image, 5, 60, 120, "Curso PHP 7", $red);

//formato
imagepng($image);

//precisa destruir a variável para nao ficar pendurada
imagedestroy($image);



 ?>