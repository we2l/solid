<?php

namespace W2l\Liskov\errado;

class ExecutarArquivo
{
    public function executar(Arquivo $arquivo) : void 
    {
        $arquivo->ler();
        $arquivo->escrever();;
    }
} 