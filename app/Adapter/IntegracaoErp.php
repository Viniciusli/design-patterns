<?php

namespace App\Adapter;

class IntegracaoErp
{
    public function token(string $apiKey): string
    {
        return 'TOKEN_GERADO_VIA_API';
    }

    public function pedido(array $pedido, string $apiKey): bool
    {
        return true;
    }
}