<?php

namespace App\Adapter\Interfaces;

use App\Adapter\Models\Pedido;

interface IErpAdapterInterface
{
    public function gerarToken(string $apiKey, string $usuario): string;
    public function enviarPedido(Pedido $pedido, string $token): bool;
}