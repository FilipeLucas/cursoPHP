<?php
//Cria uma imagem a partir de outra já existente
$image = imagecreatefromjpeg("certificado.jpg");
//Definindo as cores da fonte
$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

/**
 * Como o código normal não estava funcionando, foi necessário
 * utilizar o comando __DIR__.DIRECTORY_SEPARATOR. antes do
 * caminho da fonte necessária.
 */
//Definindo a imagem, o tamanho da fonte, o angulo, posição X e Y,
//cor da fonte, caminho da fonte e texto a ser escrito.
imagettftext($image, 32,0, 320, 250, $titleColor,__DIR__.DIRECTORY_SEPARATOR.
 "fonts".DIRECTORY_SEPARATOR."Bevan". DIRECTORY_SEPARATOR ."Bevan-Regular.ttf", "CERTIFICADO");
imagettftext($image, 32,0, 375, 350, $titleColor,__DIR__.DIRECTORY_SEPARATOR.
"fonts".DIRECTORY_SEPARATOR."Playball". DIRECTORY_SEPARATOR ."Playball-Regular.ttf","Divanei Aparecido");
imagestring($image, 3, 440, 370,utf8_decode("Concluído em: "). date("d/m/Y"), $titleColor);

header ("Content-Type: image/jpeg");
//Comando para gerar um arquivo na máquina 
imagejpeg($image, "certificado2-".date("Y-m-d").".jpg");

//imagejpeg($image);

imagedestroy($image);

?>