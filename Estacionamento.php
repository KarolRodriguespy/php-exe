<?php
namespace Challenges;

use \InvalidArgumentException;
use \Motorista;

class Estacionamento
{
    #dizendo a capacidade
    private $capacidade = 10;
    #array vagas
    public $vagasDispo = [];

    #verificando se pode estacionar ou não
    public function estacionar(Motorista $motorista)
    {
        $vagas = array_map(function ($item) {
            return $vaga->vagas;
        }, $this->motoristas);

        $preenchida = array_sum($vagas);

        if ($motorista->vagas > ($this->capacidade - $preenchida)) {
            throw new \InvalidArgumentException("Capacidade excedida!!!");
        }
        $this->motoristas[] = $motoristas;
        return $motoristas;
    }

    public function estacionarCarros(array $carros)
    {
        $todosOsCarros = [];
        try {
            foreach ($carros as $carro) {
                $this->receber($carro);
                $todosOsCarros[] = $carro;
            }
        } catch (\InvalidArgumentException $e) {
            foreach ($carros as $carro) {
                $this->retirar($carro->carro);
            }
        }
        return $todosOsCarros;
    }

/*public function retirarCarro(array $carros)
{
$todosOsCarros = [];
foreach ($carros as $carro) {
$todosOsCarros[] = $this->retirarCarro($carro);
}
return $todosOsCarros;
}*/

}
