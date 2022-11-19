<?php

use W2l\Isp\correto\Smartphone;
use W2l\Isp\correto\TelefoneFixo;
use W2l\Isp\correto\ServicoTelefone;

require_once __DIR__ . "/../vendor/autoload.php";

/* Maneira incorreta, desta forma fere a letra I e O do SOLID */

// use W2l\Isp\errado\ServicoTelefone;
// use W2l\Isp\errado\Smartphone;
// use W2l\Isp\errado\TelefoneFixo;

// $smartphone = new Smartphone();
// $telefoneFixo = new TelefoneFixo();

// $servicoTelefone = new ServicoTelefone();
// $servicoTelefone->discarParaAlguem($telefoneFixo);
// $servicoTelefone->tirarFotoDeAlgo($telefoneFixo);

/* ***************************************************************************************************** */

/** Maneira correta */

$smartphone = new Smartphone();
$telefoneFixo = new TelefoneFixo();

$servicoTelefone = new ServicoTelefone();
$servicoTelefone->discarParaAlguem($telefoneFixo);
$servicoTelefone->tirarFotoDeAlgo($smartphone);