<?php

namespace W2l\Isp\correto;

use W2l\Isp\correto\interfaces\SmartphoneInterface;

class Smartphone implements SmartphoneInterface
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

    public function conectarInternet(): void
    {
        echo "Smartphone a internet..." . PHP_EOL;
    }
}