<?php

$qualASuaIdade = 65;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCrianca) {

    echo "É criança";

}else if ($qualASuaIdade < $idadeMaior) {

    echo "Adolescente";
}else if ($qualASuaIdade < $idadeMelhor){

    echo "Adulto";

}else {

    echo "Idoso";

}

echo "<br>";
//Condicional Ternário para rápida comparação e retorno de resultado.
echo ($qualASuaIdade < $idadeMaior)? "Menor de idade":"Maior de idade";

?>
