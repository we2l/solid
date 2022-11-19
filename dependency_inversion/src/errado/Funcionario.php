<?php

namespace W2l\Dip\errado;

class Funcionario 
{
    public function __construct
    (
        private string $cargo,
        private int $salario,
        private int $comissao = 0
    )
    {}

    public function getSalario() : int 
    {
        return $this->salario;
    }

    public function getSalarioComComissao() : int
    {
        return $this->salario + $this->comissao;
    }

    public function getCargo() : string
    {
        return $this->cargo;
    }
}