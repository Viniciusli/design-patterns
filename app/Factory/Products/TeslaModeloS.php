<?php

namespace App\Factory\Products;

use App\Factory\Interfaces\CarroProductInterface;

class TeslaModeloS implements CarroProductInterface
{
    public function acelerar()
    {
        echo 'Acelerando Tesla modelo S';
    }

    public function frear()
    {
        echo 'Freando Tesla modelo S';
    }

    public function trocarMarcha()
    {
        echo 'Trocando marcha do Tesla modelo S';
    }
}