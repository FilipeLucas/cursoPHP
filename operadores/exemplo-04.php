<?php

$a = 55.0;
$b = 55;

var_dump($a > $b);

echo "</br>";

var_dump($a < $b);

echo "</br>";
/*
- "=" é para atribuição;
- "==" é para comparação de valor; Mesma coisa do Java.
- "===" é para comparação de igualdade de identidade,
ou seja, se são do mesmo tipo.
*/
var_dump($a == $b);
echo "</br>";
var_dump($a === $b);
echo "</br>";
/*
- "!=" é para verificar se são valores diferentes; Mesma coisa do Java.
- "!==" é para comparar se o tipo dos valores são diferentes.
*/
var_dump($a != $b);
echo "</br>";
var_dump($a !== $b);


?>