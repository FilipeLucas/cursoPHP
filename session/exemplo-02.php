<?php 

require_once ("config.php");
/**
 * Caso queira eliminar uma sessão específica deve-se usar o 
 * comando "unset()" e passar a sessão com a variável específica
 * para eliminar.
 * unset($_SESSION["nome"]);
 */

 session_unset();

echo $_SESSION["nome"];

//session_destroy();

?>