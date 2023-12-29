<?php

namespace App\Factory\Products;

use App\Factory\Interfaces\CarroProductInterface;

class DodgeCharger implements CarroProductInterface
{
    public function acelerar()
    {
        echo 'Acelerando Dodge Charger';
    }

    public function frear()
    {
        echo 'Freando Dodge Charger';
    }

    public function trocarMarcha()
    {
        echo 'Trocando marcha do Dodge Charger';
    }
}