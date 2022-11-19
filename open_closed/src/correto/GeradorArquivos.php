<?php

namespace W2l\Ocp\correto;

class GeradorArquivos
{
    public function gerarArquivos(array $arquivos) : void
    {
        foreach($arquivos as $arquivo) {
           $arquivo->gerar();
        }
    }
}