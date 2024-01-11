<?php

namespace App\TemplateMethod;

class ImpostoVestuario extends ImpostoAbstract
{
    protected function calculaImpostoVariavel(float $preco): float
    {
        return $preco;
    }
}