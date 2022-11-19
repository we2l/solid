<?php

declare(strict_types=1);

namespace W2l\Srp;

class CadastrarUsuario 
{
    public function __construct(
        public int $id, 
        public string $nome, 
        public string $email
    ) 
    {}
}