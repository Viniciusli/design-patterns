<?php

namespace App\Adapter\Models;

class Pedido
{
    protected int $numeroPedido;
    protected $valorTotal;
    protected $produtos;

    public function addProduto(string $produto)
    {
        $this->produtos[] = $produto;
        return $this;
    }

    public function getNumeroPedido(): int
    {
        return $this->numeroPedido;
    }

    public function setNumeroPedido(int $numeroPedido): Pedido
    {
        $this->numeroPedido = $numeroPedido;
        return $this;
    }

    public function getValorTotal(): float
    {
        return $this->valorTotal;
    }

    public function setValorTotal(float $valorTotal): Pedido
    {
        $this->valorTotal = $valorTotal;
        return $this;
    }

    public function getProdutos(): array
    {
        return $this->produtos;
    }
}