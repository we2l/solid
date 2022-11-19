<?php

namespace W2l\Dip\correto;

use W2l\Dip\correto\interfaces\PagadorInterface;
use W2l\Dip\correto\interfaces\PagavelInterface;

class Pagamento implements PagadorInterface
{
    public function __construct
    (
        private PagavelInterface $pagavel
    )
    {}

    public function getSalario() : int 
    {
        if($this->pagavel->getCargo() === 'Representante') {
            return $this->pagavel->getRemuneracao();
        }

        return $this->pagavel->getRemuneracao();
    }

    public function setPagavel(PagavelInterface $pagavel): void
    {
        $this->pagavel = $pagavel;
    }
}