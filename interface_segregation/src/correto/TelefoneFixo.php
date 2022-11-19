<?php

namespace W2l\Isp\correto;

use W2l\Isp\correto\interfaces\TelefoneFixoInterface;

class TelefoneFixo implements TelefoneFixoInterface
{
    public function tocar() : void
    {
        echo "Telefone Fixo tocando..." . PHP_EOL;
    }

    public function discar() : void
    {
        echo "Telefone Fixo discando..." . PHP_EOL;
    }
}