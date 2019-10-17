<?php

namespace Challenges;

use \InvalidArgumentException;

class Estacionamento
{

    public $vaga = [];
    private $capacidade = 10; 

    public function estacionar(Carro $carro)
    {
        $ocupaVaga = array_map(function ($item) {
            return $item->ocupaVaga;
        }, $this->vaga);

        $preenchida = array_sum($ocupaVaga);

        if ($carro->ocupaVaga > ($this->capacidade - $preenchida)) {
            throw new InvalidArgumentException("Estacionamento Lotado");
        }
        $this->vaga[] = $carro;

        return $carro;
    }

    public function estaEstacionado(Carros $carros)
    {
        $todoasvagas = [];

        try {
            foreach ($carros as $carro) {
                $this->estacionando($carro);
                $todoasvagas[] = $carro;
            }
        } catch (\InvalidArgumentException $e) {
            foreach ($carros as $carro) {
                $this->retirar($carro->carro);
            }
        }
        return array($todoasvagas);
    }

    public function retirar(array $carros)
    {
        $todoasvagas = [];
        foreach ($carros as $carro) {
            $todoasvagas[] = $this->retirar($carro);
        }
        return $todoasvagas;
    }

}
