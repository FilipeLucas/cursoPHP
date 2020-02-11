<?php 

class Pessoa {

    public $nome;//Atributo

    //Método
    public function falar()
    {       
        return "O meu nome é ".$this->nome;
    }

}
$filipe = new Pessoa();
$filipe->nome = "Filipe Lucas";
echo $filipe->falar();

?>