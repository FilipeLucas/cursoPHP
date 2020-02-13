<?php

interface Veiculo
{

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

class Civic implements Veiculo
{

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

$carro = new Civic();

$carro->trocarMarcha(1);
?>