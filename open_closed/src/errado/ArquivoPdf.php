<?php

namespace W2l\Ocp\errado;

class ArquivoPdf extends Arquivo
{
    public function gerarPdf() : void 
    {
        echo "PDF gerado" . PHP_EOL;
    }
}