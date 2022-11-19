<?php

namespace W2l\Srp;

class Mail 
{
    public function send($email, $message)
    {
        echo "-------------------------------------------" . PHP_EOL;
        echo "E-mail enviado com sucesso para {$email}" . PHP_EOL;
        echo "-------------------------------------------";
    }
}