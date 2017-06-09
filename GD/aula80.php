<?php 
$image = imagecreatefromjpeg("img/certificado.jpg");


$titleColor = imagecolorallocate($image, 0, 0, 0);

$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450,150, "CERTIFICADO", $titleColor);

imagestring($image, 5, 440,350, utf8_decode("Alex Ramon da SIlva Guimarães"), $titleColor);

imagestring($image, 3, 440,370, utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);

header("Content-Type: image/jpeg");

//aqui ele vai apenas gerar e mostrar na tela a imagem
//imagejpeg($image);

//Mas também podemos acrescentar informações para em vez de mostrar na tela ele gerar o arquivo para download. como o exemplo abaixo
//(arquvo, pasta para salvar / nome do arquivo com extensão, qualidade que vai de 0 a 100 )
imagejpeg($image, "certificados/certificado-".date("Y-m-d").".jpg",60);


imagedestroy($image);

 ?>