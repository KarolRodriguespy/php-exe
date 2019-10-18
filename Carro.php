<?php

//Para cada Carro deve ser informado sua placa, modelo, cor e Motorista

namespace Challenges;

use Prophecy\Comparator\Factory;

class Carro {
    
    public $placa;
    public $modelo;
    public $cor;
    public $motorista;

   
    public function __construct($placa,$modelo,$cor,$motorista)
    {
        $this->placa=$placa;
        $this->modelo=$modelo;
        $this->cor=$cor;
        $this->motorista =$motorista;

    }
    public function infoMotorista ($motorista,$idade,$numerohabilitacao,$pontos)
    {
        $motorista = new Motorista($motorista,$idade,$pontos,$numerohabilitacao);
}
}

