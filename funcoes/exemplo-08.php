<?php

/**
 * Declaração de tipos ecaláveis, ao usar os "..." está informando
 * que todos os parâmetros serão do tipo especificado.
 * Para converter o tipo dos dados do return é só seguir
 * como o exemplo abaixo.
 */

function soma( float ...$valores):string {
    
    return array_sum($valores);

}

echo var_dump(soma(2,2));
echo "<br>";
echo soma(25,33);
echo "<br>";
echo soma(1.5,3.2);
echo "<br>";
?>