<?php

use App\Adapter\IntegracaoErp;
use App\Adapter\IntegracaoErpAdapter;
use App\Adapter\Models\Pedido;

require_once '../../vendor/autoload.php';

$integracaoLegado = new IntegracaoErp();
$integracaoErpAdapter = new IntegracaoErpAdapter();

$token = $integracaoErpAdapter->gerarToken('123456', 'VINI_LEE');

$pedidoTeste = new Pedido();
$pedidoTeste->setValorTotal(3509.50)
    ->setNumeroPedido(123456)
    ->addProduto('Iphone X')
    ->addProduto('Carregador sem fio - Iphone X');

$pedidoEnviadoComSucesso = $integracaoErpAdapter->enviarPedido($pedidoTeste, $token);