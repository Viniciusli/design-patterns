<?php

namespace App\Factory\Products;

use App\Factory\Interfaces\CarroProductInterface;

class TeslaModeloX implements CarroProductInterface
{
    public function acelerar()
    {
        echo 'Acelerando Tesla modelo X';
    }

    public function frear()
    {
        echo 'Freando Tesla modelo X';
    }

    public function trocarMarcha()
    {
        echo 'Trocando marcha do Tesla modelo X';
    }
}