<?php

namespace Challenges;

use \InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class MotoristaTest extends TestCase
{
    /**
     * @test
     */
    public function deveRetornarErroQuandoMotoristaNaoTemHabilitacao() {
        $this->expectException(InvalidArgumentException::class);

        $motorista = new Motorista('Teste', 17, 10, '');
    }

    /**
     * @test
     */
    public function deveRetornarErroQuandoMotoristaNaoTemHabilitacaoEmFuncaoDaIdade() {
        $this->expectException(InvalidArgumentException::class);

        $motorista = new Motorista('Teste', 17, 0, '123');
    }
}
