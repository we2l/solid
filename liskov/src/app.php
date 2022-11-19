<?php

use W2l\Liskov\correto\ArquivoEscrita;
use W2l\Liskov\correto\ArquivoLeitura;
use W2l\Liskov\correto\ArquivoTxt;
use W2l\Liskov\correto\ArquivoTxtFundoVermelho;
use W2l\Liskov\correto\ExecutarArquivo;

require_once __DIR__ . "/../vendor/autoload.php";

// use W2l\Liskov\errado\ArquivoLeitura;
// use W2l\Liskov\errado\ArquivoTxt;
// use W2l\Liskov\errado\ExecutarArquivo;


/**
 * Maneira incorreta ferindo o princípio de Liskov
 */

// $arquivoTxt = new ArquivoTxt();
// $arquivoLeitura = new ArquivoLeitura();

// $executarArquivo = new ExecutarArquivo();
// $executarArquivo->executar($arquivoTxt);



$arquivoTxt = new ArquivoTxt();
$arquivoLeitura = new ArquivoLeitura();
$arquivoEscrita = new ArquivoEscrita();
$arquivoTxtFundoVermelho = new ArquivoTxtFundoVermelho();

$executarArquivo = new ExecutarArquivo();
$executarArquivo->executar($arquivoTxtFundoVermelho);