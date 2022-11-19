<?php 

namespace W2l\Ocp\correto;

use W2l\Ocp\correto\interfaces\Arquivo;

class ArquivoWord implements Arquivo
{
    public function gerar() : void 
    {
        echo "DocX gerado" . PHP_EOL;
    }
}