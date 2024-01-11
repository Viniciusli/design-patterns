<?php

namespace App\TemplateMethod;

class ImpostoAlimentacao extends ImpostoAbstract
{
    protected function calculaImpostoVariavel(float $preco): float
    {
        return $preco;
    }
}