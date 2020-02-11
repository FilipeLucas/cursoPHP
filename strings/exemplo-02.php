<?php

$nome = "joão rangel";
//Converte somente letras sem caractere especial para maiúsculo.
echo strtoupper($nome);
echo "<br>";

//Converte letra com caractere especial para maiúsculo.
echo mb_strtoupper($nome);
echo "<br>";

$nome = mb_strtolower($nome);
echo $nome;
echo "<br>";
//Converte somente a primeira letra em maiúscula
$nome = ucfirst($nome);
echo $nome;
echo "<br>";
//Converte a primeira letra de todas as palavras em maiúsculas.
$nome = ucwords($nome);
echo $nome;
echo "<br>";

?>