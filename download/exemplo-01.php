<?php

$link = "https://www.google.com.br/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename = basename($parse["path"]);

/**
 * Caso queira nomear o arquivo para outro basta que ao invés
 * de passar a variável $basename, coloque entre "" o nome
 * desejado.
 */
$file = fopen("logo do google.png", "w+");

fwrite($file, $content);

fclose($file);

?>

<img src="<?="logo do google.png"?>">