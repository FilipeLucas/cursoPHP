<?php
/**
 * Include procura na pasta definida como pasdrão caso não encontre
 * a funcão solicitada, e permite que ele funcione mesmo com erros. 
 * Bom para projetos internos.
 * Require exige a inclusão do arquivo e que ele esteja correto
 * e exista. Bom para projetos finais de distribuição.
 * Include_once e Require_once para evitar chamada dupla de uma
 * mesma função, e evitar mensagens de erro.
 */


//include "func/exemplo-01.php";
require_once "func/exemplo-01.php";

$resultado = somar(10,25);

echo $resultado;

?>
