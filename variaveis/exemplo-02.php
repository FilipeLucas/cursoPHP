<?php
 /*
//abaixo temos variável com número
$anoNascimento = 1995;
//abaixo é meu nome completo
$nomeCompleto = "Filipe Lucas Andrade Ferreira";
//abaixo é somente meu nome e sobrenome
$_nomeSobrenome = "Filipe Ferreira";
*/
$nome = "Filipe";

$sobrenome = "Ferreira";

echo $nome . " " . $sobrenome;
exit;


echo $nomeCompleto;
echo "</br>";
echo $anoNascimento;
echo "</br>";
echo $_nomeSobrenome;
echo "</br>";

//unset ($anoNascimento);
if (isset ($anoNascimento)){
    echo $anoNascimento;
}

?>