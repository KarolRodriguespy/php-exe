<?php
namespace Challenges;

// apenas maiores de 18 anos possuem habilitação./A habilitacão 
// não deve ultrapassar o numeros de pontos que hoje não deve ser superior a 20 pontos.

use \Exception;
use \InvalidArgumentException;

class Motorista {

    public $motorista;
    public $idade;
    public $numerohabilitacao;
    public $pontos;

  public static function factory(string $motorista,int $idade, int $pontos, string $numerohabilitacao){
    
      return new self($motorista,$idade,$pontos, $numerohabilitacao);
  }

  public function __construct($motorista,$idade,$pontos,$numerohabilitacao)
  {
      $this->motorista = $motorista;
      $this->idade = $idade;
      $this->pontos = $pontos;
      $this->numerohabilitacao=$numerohabilitacao;


  }

  public function verificaIdade (int $idade)
  {
    
    if ($idade >=18){
            echo "pode estacionar";
        }else{
          throw new \InvalidArgumentException("CNH invalida");
        }
  }
  public function verificaCnh (string $numerohabilitacao){
      if($numerohabilitacao == " "){
        throw new \InvalidArgumentException("CNH invalida");
      }else{
          echo "Pode estacionar";
      }
  }
  public function verificaPonto(int $pontos){

    if ($pontos > 20){
       throw new \InvalidArgumentException("CNH invalida");
    }

  }
}