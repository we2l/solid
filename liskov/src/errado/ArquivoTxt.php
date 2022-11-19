<?php

namespace W2l\Liskov\errado;

class ArquivoTxt extends Arquivo
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