<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad ->setNome("Djalma Sindeaux");
$cad ->setEmail("djalma@email.com.br");
$cad ->setSenha("11");

$cad->registrarVenda();

?>