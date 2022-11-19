<?php

namespace W2l\Isp\errado;

use W2l\Isp\errado\interfaces\TelefoneInterface;

class TelefoneFixo implements TelefoneInterface
{
    public function tocar() : void
    {
        echo "Telefone Fixo tocando..." . PHP_EOL;
    }

    public function discar() : void
    {
        echo "Telefone Fixo discando..." . PHP_EOL;
    }

    public function tirarFoto() : void
    {
        throw new \RuntimeException("Método não implementado");
    }
}