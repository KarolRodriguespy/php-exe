<?php
namespace Challenges;

class Motorista
{
    public $motorista; //nome
    public $idade; //info publica
    private $pontos; //só o motorista
    private $cnh; //só o motorista

    public static function factory(string $motorista, int $idade, int $pontos, string $cnh)
    {
        return new self($motorista, $idade, $pontos, $cnh);
    }

    public function __construct(string $motorista, int $idade, int $pontos, string $cnh)
    {
        $this->nome = $motorista;
        $this->idade = $idade;
        $this->pontos = $pontos;
        $this->cnh = $cnh;
    }

    public static function validaIdade(int $idade)
    {
        if ($idade >= 18) {
            echo "Próximo passo";
        } else {
            throw new Exception ("Idade não permitida????");
        }
    }

    public static function validaCNH(string $cnh)
    {
        if ($cnh != '') {
            echo "Próximo passo";
        } else {
            echo "CNH inválida";
        }
    }

    public static function validaPontos(int $pontos)
    {
        if ($pontos <= 20) {
            print_r("Pode Estacionar");
        } else {
            print_r("Não aceitar motorista");
        }
    }
}
