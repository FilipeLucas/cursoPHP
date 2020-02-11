<?php

$frase = "A repetição é mãe da retenção.";

$palavra = "mãe";

$q = strpos($frase, $palavra);

$texto = substr($frase, 0, $q);

var_dump($texto);
/**
 * Neste exemplo utilizou de forma dinâmica algumas funções de
 * string, como pegar o tamanho do valor da variável para realizar
 * os cálculos de busca.
 */
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
echo "<br>";
var_dump($texto2);

//echo $texto2;

?>