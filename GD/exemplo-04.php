<?php

header("Content-Type: image/jpg");
//Bloco para carregar informações da imagem
$file = "wallpaper.jpg";

$new_width = 256;
$new_height = 256;

list($old_widt, $old_height) = getimagesize($file);
//fim do bloco

$new_image = imagecreatetruecolor($new_width, $new_height);
$old_image = imagecreatefromjpeg($file);
/**
 * 1- imagem de destino
 * 2- imagem de origem
 * 3- os parâmetros de 3 a 6 são para definir os pontos de origem
 * da renderização da imagem ou de corte da mesma.
 * 4- parâmetros de 7 a 8 são para largura e altura em pixels da imagem de destino
 * 5- 2 ultimos parâmetros são para largura e altura em pixels da imagem de origem.
 */
imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, 
$new_width,$new_height, $old_widt, $old_height);

imagejpeg($new_image);

imagedestroy($old_image);
imagedestroy($new_image);

?>