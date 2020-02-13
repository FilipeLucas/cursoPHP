<?php

/**
 * __autoload busca as classas (arquivos) dentro do mesmo
 * diretório.
 */
function __autoload($classe){
    
    //var_dump($classe);

    require_once("$classe.php");

}


$carro = new DelRey();

$carro-> acelerar(80);

?>