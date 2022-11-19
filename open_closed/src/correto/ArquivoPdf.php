<?php

namespace W2l\Ocp\correto;

use W2l\Ocp\correto\interfaces\Arquivo;

class ArquivoPdf implements Arquivo
{
    public function gerar() : void 
    {
        echo "PDF gerado" . PHP_EOL;
    }
}