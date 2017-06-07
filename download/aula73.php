<?php 

$link = "https://static.omelete.uol.com.br/media/extras/conteudos/Mr-Robot-S2_OCz2fwi.png";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);


?>

<img src="<?=$basename?>">