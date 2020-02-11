<?php 

function ola(){

    $argumentos = func_get_args();
    return $argumentos;

}

var_dump(ola("Bom dia","Filipe","você ganhou",10,"reais"));

?>