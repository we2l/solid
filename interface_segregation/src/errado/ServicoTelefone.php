<?php

namespace W2l\Isp\errado;

use W2l\Isp\errado\interfaces\TelefoneInterface;

class ServicoTelefone
{
    public function discarParaAlguem(TelefoneInterface $telefone)
    {
        $telefone->discar();
    }

    public function tirarFotoDeAlgo(TelefoneInterface $telefone)
    {
        $telefone->tirarFoto();
    }
}