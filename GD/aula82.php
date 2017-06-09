<?php 

header("Content-Type: image/png");

$file = "img/foto.png";

//nova largura e altura
$new_width = 256;
$new_height = 256;

//getimagesize -> pega o tamanho da imagem
//$data = getimagesize($file);
//a função list() já pega os valores na posião 0 e 1 do array
list($old_width, $old_heigth) = getimagesize($file);

//criar uma nova tela:
//imagecreatetruecolor mais de 16 milhoes de cores
//criando uma imagem a parti da original
$new_image = imagecreatetruecolor($new_width, $new_height);
$old_image = imagecreatefrompng($file);

//(destino, img de origem, a parti de qual parte quer recorta(se não coloca 0), posição x, posição y, largura da img destino, altura da img destino, altura da img de origem, altura da img origem) 
//imagecopyresampled(dst_image, src_image, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h)

imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_heigth);

imagepng($new_image);

imagedestroy($old_image);
imagedestroy($new_image);




 ?>