<?php

namespace App\Observer;

use App\Observer\Interfaces\Observer;

class ControleRequisicoesCompraObserver implements Observer
{
    public function atualizado(string $codigo)
    {
        $this->adicionaListaRequisicoesCompra($codigo);
    }

    public function adicionaListaRequisicoesCompra(string $codigoProduto)
    {
        echo "Produto adicionado à lista de requisicões de compra";
    }
}