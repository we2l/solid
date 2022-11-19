<?php

namespace W2l\Dip\correto\interfaces;

interface PagadorInterface 
{
    public function setPagavel(PagavelInterface $pagavel) : void;

    public function getSalario() : int;
}