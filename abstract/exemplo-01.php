<?php 

interface Veiculo
{

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
    public function modeloVeiculo($modelo);

}

abstract class Automovel implements Veiculo
{

    public function modeloVeiculo($modelo)
    {
       echo "O veículo de modelo " . $modelo; 
    }

    public function acelerar($velocidade)
    {
        echo "O veículo aceleror até " . $velocidade . " km/h";
    }

    public function frenar($velocidade)
    {
        echo "O veículo frenou com " . $velocidade . " km/h";
    }

    public function trocarMarcha($marcha)
    {
        echo "O veículo trocou a marcha " . $marcha;
    }
}

class DelRey extends Automovel{

    public function empurrar(){

    }

}

$carro = new DelRey();

$carro -> acelerar(200);

?>