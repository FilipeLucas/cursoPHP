<?php
/*
Validador novo php 7, que verifica se os valores são nulos,
ele é bom pois evita o "Notice" de erro, o operador para
quando encontra o primeiro valor não nulo.
*/
$a = NULL;
$b = 8;
$c = 10;

echo $a ?? $b ?? $c;

?>