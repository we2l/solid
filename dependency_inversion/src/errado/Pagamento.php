<?php

namespace W2l\Dip\errado;

class Pagamento 
{
    public function __construct
    (
        private Funcionario $funcionario
    )
    {}

    public function getSalario() : int 
    {
        if($this->funcionario->getCargo() === 'Representante') {
            return $this->funcionario->getSalarioComComissao();
        }

        return $this->funcionario->getSalario();
    }
}