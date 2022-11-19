<?php

use W2l\Dip\correto\Funcionario;
use W2l\Dip\correto\Pagamento;
use W2l\Dip\correto\ServicoPagamento;

require_once __DIR__ . "/../vendor/autoload.php";


/* Maneira incorreta, desta forma fere a letra D do SOLID */

// use W2l\Dip\errado\Funcionario;
// use W2l\Dip\errado\Pagamento;


// $funcionario = new Funcionario('Desenvolvedor Web', 7000, 100);
// $funcionarioRep = new Funcionario('Representante', 5000, 250);

// $pagamentoDev = new Pagamento($funcionario);
// $pagamentoRep = new Pagamento($funcionarioRep);

// echo "O salário do desenvolvedor é {$pagamentoDev->getSalario()}" . PHP_EOL;
// echo "O salário do representante é {$pagamentoRep->getSalario()}" . PHP_EOL;



$funcionario = new Funcionario('Desenvolvedor Web', 7000, 100);
$funcionarioRep = new Funcionario('Representante', 5000, 250);

$pagamentoDev = new Pagamento($funcionario);

$servicoPagamento = new ServicoPagamento($funcionario, $pagamentoDev);
$servicoPagamento->prepararPagamento()->pagar();