<?php

$nome = "Filipe";

function teste(){

    global $nome;
    echo $nome;
}

function teste2() {
    global $nome;
    echo $nome. " rodando no teste 2";
}

teste();
echo "</br>";
teste2();


/*Devemos definir a variável como global antes de
criar um valor para ela.
function setMessage(){
    global $message;
    $message = "Olá mundo";
}

setMessage();

echo $message;
*/

?>