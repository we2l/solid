<?php

namespace W2l\Isp\errado;

use W2l\Isp\errado\interfaces\TelefoneInterface;

class Smartphone implements TelefoneInterface
{
    public function tocar() : void
    {
        echo "Smartphone tocando..." . PHP_EOL;
    }

    public function discar() : void
    {
        echo "Smartphone discando..." . PHP_EOL;
    }

    public function tirarFoto() : void
    {
        echo "Smartphone tirando foto..." . PHP_EOL;
    }
}