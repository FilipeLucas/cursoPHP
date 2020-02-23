<?php

header("Content-Type: image/png");

$image = imagecreate(256, 256);
//Obs: a 1 cor criada será a cor de fundo
$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);

imagestring($image, 5, 60, 120, "Curso PHP 7", $red);

imagepng($image);

imagedestroy($image);

?>