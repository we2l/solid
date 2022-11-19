<?php

namespace W2l\Srp;

class ServicoEmail
{
    public function enviarEmail(string $email, string $message) : void
    {
        $mail = new Mail();
        $mail->send($email, $message);
    }
}