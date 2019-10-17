<?php

namespace Challenges;

class Carro {
    public $placa;
    public $cor;
    public $modelo;

    public function __construct($placa, $cor, $modelo) {
        $this->placa = $placa;
        $this->cor = $cor;
        $this->modelo = $modelo;
    }

    public function donoCarro($motorista, $idade, $cnh, $pontos)
    {
        $motorista = new Motorista ($motorista, $idade, $cnh, $pontos);
    }
}