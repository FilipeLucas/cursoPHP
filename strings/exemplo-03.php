<?php
//Função de replace para substituir letras etc.
$empresa = "Hcode Treinamento legais";
$replace = "curso";
$busca = "Treinamento";
$q = strpos($empresa, $busca);

var_dump($q);
//$empresa = str_replace("o", "0", $empresa);
//$empresa = str_replace("e", "3", $empresa);

//echo $empresa;

//$empresa2 = substr($empresa, 0, strpos($empresa, "T")) . $replace;
$empresa2 = substr_replace($empresa, $replace, $q, strlen($busca));
var_dump($empresa2);
echo "<br>";

echo $empresa2;

?>