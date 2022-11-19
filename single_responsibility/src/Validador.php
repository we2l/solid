<?php

namespace W2l\Srp;

class Validador
{
    public function validarEmail(string $email) : bool
    {
        return (bool) filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}