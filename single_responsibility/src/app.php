<?php

declare(strict_types=1);

use W2l\Srp\CadastrarUsuario;
use W2l\Srp\CadastrarUsuarioErrado;
use W2l\Srp\ServicoEmail;
use W2l\Srp\Validador;

require_once __DIR__ . "/../vendor/autoload.php";

/**
 *  Maneira incorreta ferindo o princípio de responsabilidade única do SOLID
 */

// $cadastrarUsuario = new CadastrarUsuarioErrado(1, 'Weslley', 'weslleyaraujo@gmail.com');

// if($cadastrarUsuarioErrado->validarEmail($cadastrarUsuarioErrado->email)) {
//     echo "e-mail válido para o usuário {$cadastrarUsuarioErrado->nome}" . PHP_EOL;

//     $cadastrarUsuario->enviarEmail($cadastrarUsuarioErrado->email, "Seja bem vindo {$cadastrarUsuarioErrado->nome}");
// } else {
//     echo "e-mail inválido :c ";
// }

/* **************************************************************************************************** */

/**
 * Maneira correta, respeitando o princípio de responsabilidade única do SOLID
 */

$usuario = new CadastrarUsuario(1, "Weslley", "weslleyadesousa@gmail.com");
$servicoEmail = new ServicoEmail();
$validador = new Validador();

if($validador->validarEmail($usuario->email)) {
    echo "e-mail válido para o usuário {$usuario->nome}" . PHP_EOL;

    $servicoEmail->enviarEmail($usuario->email, "Seja bem vindo {$usuario->nome}");
} else {
    echo "e-mail inválido :c ";
}