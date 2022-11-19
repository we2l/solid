<?php

namespace W2l\Isp\correto\interfaces;

interface SmartphoneInterface extends TelefoneInterface
{
    public function tirarFoto() : void;

    public function conectarInternet() : void;
}