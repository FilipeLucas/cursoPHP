<?php

$a = 10;
/**
 * OBS: Parâmetro de função e variável são coisas diferentes,
 * tanto que posso trocar o parâmetro $a da função por outra letra
 * que não causa problema algum. Então fica a frase:
 * O que acontece na função, fica dentro da função (analogia
 * a Las Vegas).
 * Caso queira passar o que ocorre dentro da função para fora
 * deve-se colocar um & antes do parâmetro.
 */
function trocaValor(&$a){

    $a += 55;
    return $a;

}

echo trocaValor($a);
echo "<br>";

echo $a;


?>