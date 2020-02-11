<?php

/**
 * Como visto e usado na aula anterior, para se fazer uma
 * referência de momória onde a variável está armazenada
 * e assim alterar seu valor original, deve-se usar o &.
 */

$pessoa = array(
    'nome' => 'João',
    'idade' => 20
);

foreach ($pessoa as &$value) {
    
    if(gettype($value) === 'integer') $value +=10;

    echo $value.'<br>';

}

print_r($pessoa);
?>