<?php

namespace W2l\Liskov\correto;

use RuntimeException;
use W2l\Liskov\correto\interfaces\ArquivoLerInterface;

class ArquivoLeitura implements ArquivoLerInterface
{
    public function ler() : void 
    {
        echo "Lendo ArquivoLeitura" . PHP_EOL;
    }
} 