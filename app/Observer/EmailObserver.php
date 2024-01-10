<?php

namespace App\Observer;

use App\Observer\Interfaces\Observer;

class EmailObserver implements Observer
{
    public function atualizado(string $codigo)
    {
        $this->enviaEmailEstoqueZerado($codigo);
    }

    public function enviaEmailEstoqueZerado(string $codigoProduto)
    {
        echo "Email enviado para o setor de compras";
    }
}