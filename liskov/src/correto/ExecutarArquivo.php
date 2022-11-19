<?php

namespace W2l\Liskov\correto;

use W2l\Liskov\correto\interfaces\ArquivoEscreverInterface;
use W2l\Liskov\correto\interfaces\ArquivoInterface;
use W2l\Liskov\correto\interfaces\ArquivoLerInterface;

class ExecutarArquivo
{
    public function executar(ArquivoInterface $arquivo) : void 
    { 
        if($arquivo instanceof ArquivoEscreverInterface) {
            $arquivo->escrever();
        }

        if($arquivo instanceof ArquivoLerInterface) {
            $arquivo->ler();
        }
    }
} 