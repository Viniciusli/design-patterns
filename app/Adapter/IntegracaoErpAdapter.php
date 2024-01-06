<?php

namespace App\Adapter;

use App\Adapter\Interfaces\IErpAdapterInterface;
use App\Adapter\Models\Pedido;

class IntegracaoErpAdapter implements IErpAdapterInterface
{
    private $integracaoErp;

    public function __construct(IntegracaoErp $integracaoErp)
    {
        $this->integracaoErp = $integracaoErp;
    }

    public function gerarToken(string $apiKey, string $usuario): string
    {
        return $this->integracaoErp->token($apiKey);
    }

    public function enviarPedido(Pedido $pedido, string $token): bool
    {
        $pedidoArray = [
            'valor_total' => $pedido->getValorTotal(),
            'total' => $pedido->getNumeroPedido(),
        ];

        foreach ($pedido->getProdutos() as $produto) {
            $pedidoArray['produtos'][] = $produto;
        }

        return $this->integracaoErp->pedido($pedidoArray, $token);
    }
}