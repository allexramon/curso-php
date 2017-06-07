<?php 

$filename = "logo.png";

//base64_encode --> converte binario em string
$base = base64_encode(file_get_contents($filename));
$filename = new finfo(FILEINFO_MIME_TYPE);

echo "data:image/png;base64".$base64;

 ?>