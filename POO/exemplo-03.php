<?php

class Documento{

    private $numero;

    public function getNumero(){

        return $this->numero;

    }

    public function setNumero($numero){
        $this->numero = $numero;
    }
}

$cpf = new Documento();
$cpf->setNumero("32145698756");

print_r ($cpf->getNumero());

?>