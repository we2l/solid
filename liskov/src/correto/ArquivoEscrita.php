<?php

namespace W2l\Liskov\correto;

use W2l\Liskov\correto\interfaces\ArquivoEscreverInterface;

class ArquivoEscrita implements ArquivoEscreverInterface
{
    public function escrever() : void 
    {
        echo "escrevendo ArquivoEscrita" . PHP_EOL;
    }
} 