<?php

namespace W2l\Dip\correto\interfaces;

interface PagavelInterface 
{
    public function getRemuneracao() : int;

    public function getCargo() : string;
}