<?php

use PHPUnit\Framework\TestCase;
use Wasp\Arquitetura\Dominio\Cpf;

class CpfTest extends TestCase
{
    public function testCpfComNumeroNoFormatoInvalidoNaoDevePoderExistir()
    {
        $this->expectException(\InvalidArgumentException::class);
        new Cpf('12345678910');
    }

    public function testCpfDevePoderSerRepresentadoComoString()
    {
        $cpf = new Cpf('123.456.789-10');
        $this->assertSame('123.456.789-10', (string) $cpf);
    }
}