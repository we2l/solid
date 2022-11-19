<?php

namespace W2l\Ocp\correto;

use W2l\Ocp\correto\interfaces\Arquivo;

class ArquivoTxt implements Arquivo
{
    public function gerar() : void 
    {
        echo "Arquivo TXT" . PHP_EOL;
    }
}