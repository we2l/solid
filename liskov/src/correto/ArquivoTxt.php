<?php

namespace W2l\Liskov\correto;

use W2l\Liskov\correto\interfaces\ArquivoEscreverInterface;
use W2l\Liskov\correto\interfaces\ArquivoLerInterface;

class ArquivoTxt implements ArquivoLerInterface, ArquivoEscreverInterface
{
    public function ler() : void 
    {
        echo "Lendo ArquivoTxt" . PHP_EOL;
    }

    public function escrever() : void
    {
        echo "Escrevendo ArquivoTxt" . PHP_EOL;
    }
} 