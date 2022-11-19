<?php

namespace W2l\Isp\correto;

use W2l\Isp\correto\interfaces\SmartphoneInterface;
use W2l\Isp\correto\interfaces\TelefoneInterface;

class ServicoTelefone
{
    public function discarParaAlguem(TelefoneInterface $telefone)
    {
        $telefone->discar();
    }

    public function tirarFotoDeAlgo(SmartphoneInterface $telefone)
    {
        $telefone->tirarFoto();
    }
}