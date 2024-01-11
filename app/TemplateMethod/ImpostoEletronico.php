<?php

namespace App\TemplateMethod;

class ImpostoEletronico extends ImpostoAbstract
{
    protected function calculaImpostoVariavel(float $preco): float
    {
        return $preco * 1.2;
    }

    protected function calculaImpostoAdicional(float $preco): float
    {
        return $preco - ($preco * 0.1);
    }
}