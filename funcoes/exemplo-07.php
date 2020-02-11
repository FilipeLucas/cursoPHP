<?php

/**
 * Declaração de tipos ecaláveis, ao usar os "..." está informando
 * que todos os parâmetros serão do tipo especificado.
 */

function soma( int ...$valores ){
    
    return array_sum($valores);

}

echo soma(2,2);
echo "<br>";
echo soma(25,33);
echo "<br>";
echo soma(1.5,3.2);
echo "<br>";
?>