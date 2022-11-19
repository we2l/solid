<?php

namespace W2l\Dip\correto;

use W2l\Dip\correto\interfaces\PagadorInterface;
use W2l\Dip\correto\interfaces\PagavelInterface;

class ServicoPagamento
{
    public function __construct
    (
        private PagavelInterface $pagavel,
        private PagadorInterface $pagador
    )
    {}

    public function prepararPagamento() : static 
    {
        $this->pagador->setPagavel($this->pagavel);
        return $this;
    }

    public function pagar() : void
    {
        $cargo = $this->pagavel->getCargo();
        $valor = $this->pagador->getSalario();

        echo "Estou pagando para o {$cargo} o valor de {$valor}" . PHP_EOL;
    }
}