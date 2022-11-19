<?php

require_once __DIR__ . "/../vendor/autoload.php";

use W2l\Ocp\correto\ArquivoPdf;
use W2l\Ocp\correto\ArquivoTxt;
use W2l\Ocp\correto\ArquivoWord;
use W2l\Ocp\correto\GeradorArquivos;

// use W2l\Ocp\errado\ArquivoPdf;
// use W2l\Ocp\errado\ArquivoWord;
// use W2l\Ocp\errado\GeradorArquivos;


/**
 * Maneira incorreta ferindo o princípio de Open Closed do SOLID
 */

// $arquivos = [
//     new ArquivoWord(),
//     new ArquivoPdf()
// ];

// $geradorArquivo = new GeradorArquivos();
// $geradorArquivo->gerarArquivos($arquivos);

/* ***************************************************************************** */

$arquivos = [
    new ArquivoWord(),
    new ArquivoPdf(),
    new ArquivoTxt()
];

$geradorArquivo = new GeradorArquivos();
$geradorArquivo->gerarArquivos($arquivos);