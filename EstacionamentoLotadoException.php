<?php
namespace Challenges;

class EstacionamentoLotadoException extends \Exception
{
   public function EstacionamentoCheio(Estacionamento $estacionamento) {
       return "Não tem vagas";
   }
}