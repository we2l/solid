<?php

namespace W2l\Ocp\errado;

class GeradorArquivos
{
    public function gerarArquivos(array $arquivos) : void
    {
        foreach($arquivos as $arquivo) {
            if($arquivo instanceof ArquivoWord) {
                $arquivo->gerarDocX();
            } elseif($arquivo instanceof ArquivoPdf) {
                $arquivo->gerarPdf();
            }
        }
    }
}