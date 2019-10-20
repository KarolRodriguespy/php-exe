<?php
namespace Challenges;

class EstacionamentoLotadoException extends \Exception
{
    public function Lotado(Estacionamento $estacionamento)
    {
        return "Não tem vaga";
    }
}
