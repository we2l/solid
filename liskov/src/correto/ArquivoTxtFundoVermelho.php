<?php

namespace W2l\Liskov\correto;

class ArquivoTxtFundoVermelho extends ArquivoTxt
{
    public function ler() : void 
    {
        echo "Lendo arquivo com fundo vermelho" . PHP_EOL;
    }

    public function escrever() : void
    {
        echo "Escrevendo arquivo com fundo vermelho" . PHP_EOL;
    }
} 