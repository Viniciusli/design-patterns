<?php

require_once '../../vendor/autoload.php';

use App\TemplateMethod\ImpostoAlimentacao;
use App\TemplateMethod\ImpostoEletronico;
use App\TemplateMethod\ImpostoVestuario;

$impostoAlimentacao = new ImpostoAlimentacao();
$impostoVestuario = new ImpostoVestuario();
$impostoEletronico = new ImpostoEletronico();

echo "Preco final Alimentação: R$ {$impostoAlimentacao->calculaImpostoProduto(10)}";
echo "\n";

echo "Preco final Vestuário: R$ {$impostoVestuario->calculaImpostoProduto(10)}";
echo "\n";

echo "Preco final Eletrônico: R$ {$impostoEletronico->calculaImpostoProduto(10)}";
echo "\n";