<?php

require_once '../../vendor/autoload.php';

use App\Memento\Texto;

$texto = new Texto();

$texto->escreverTexto("A");
$texto->escreverTexto("B");
$texto->escreverTexto("C");

echo $texto->retornaTexto();
echo "\n";

$texto->desfazerEscrita();

echo $texto->retornaTexto();
