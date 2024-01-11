<?php

namespace App\TemplateMethod;

abstract class ImpostoAbstract
{
    private function calculaPrimeiroImpostoFixo(float $preco): float
    {
        return $preco * 1.3;
    }

    private function calculaSegundoImpostoFixo(float $preco): float
    {
        return $preco * 1.1;
    }

    private function calculaImpostoAdicional(float $preco): float
    {
        return $preco;
    }

    abstract protected function calculaImpostoVariavel(float $preco): float;

    public function calculaImpostoProduto(float $preco): float
    {
        $preco = $this->calculaPrimeiroImpostoFixo($preco);
        $preco = $this->calculaSegundoImpostoFixo($preco);
        $preco = $this->calculaImpostoAdicional($preco);
        $preco = $this->calculaImpostoVariavel($preco);

        return $preco;
    }
}