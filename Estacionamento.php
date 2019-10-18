<?php

namespace Challenges;

use \InvalidArgumentException;

class Estacionamento
{

    private $carrosEstacionados = [];
    const VAGAS = 10;
    

public function getCarrosEstacionados(){
    return $this -> carrosEstacionados;
}

    public function estacionar(Carro $carro)
    {

        // pega o array de carrosestacionados e verifica o tamanho dele se for igual ou maior que 10, está lotado ( isso ~e a funcao esta lotado)
        // se não continua e atribui o carro ao estacionamento




        // $ocupavaga = array_map(function ($item) {
        //     return $item->ocupavaga;
        // }, $this->carrosEstacionados);

        // $preenchida = array_sum($ocupavaga);
        // print_r("posicao: " . $preenchida);

        // if ($carro->ocupavaga > (self::VAGAS - $preenchida)) {
        //     throw new EstacionamentoLotadoException();
        // }
        // $this->carrosEstacionados[] = $carro;

        // return array($carro); rever essa parte
    }

    public function estaEstacionado(Array $carros){
        $todoasvagas = [];
        try {
            foreach($carros as $carro){
                $this->estacionando($carro);
                $todoasvagas[] = $carro;
            }
        }catch(\InvalidArgumentException $e){
            foreach($carros as $carro){
                $this->retirar($carro->carro);
            }
        }
    return array($todoasvagas);
    }

    public function retirar(array $carros){
        $todoasvagas = [];
        foreach($carros as $carro){
            $todoasvagas [] = $this ->retirar($carro);
        }
    return $todoasvagas;
    }
    
}
