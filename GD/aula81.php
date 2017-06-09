<?php 
$image = imagecreatefromjpeg("img/certificado.jpg");


$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

//(IMAGEM, tamanho, ângulo, posição x, posição y, cor do texto, localizar a fonte, texto )
imagettftext($image, 32, 0, 320, 250, $titleColor, "fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf" ,"CERTIFICADO");

imagettftext($image, 32, 0, 240, 350, $titleColor, "fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", utf8_decode("Alex Ramon da Silva Guimarães"));

imagestring($image, 3, 400,370, utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);

header("Content-Type: image/jpeg");

imagejpeg($image);

imagedestroy($image);

 ?>