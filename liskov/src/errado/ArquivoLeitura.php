<?php

namespace W2l\Liskov\errado;

use RuntimeException;

class ArquivoLeitura extends Arquivo
{
    public function ler() : void 
    {
        echo "Lendo ArquivoLeitura" . PHP_EOL;
    }

    public function escrever() : void 
    {
        throw new RuntimeException("O método escrever não pode ser implementado");
    }
} 