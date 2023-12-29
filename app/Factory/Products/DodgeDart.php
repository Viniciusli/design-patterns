<?php

namespace App\Factory\Products;

use App\Factory\Interfaces\CarroProductInterface;

class DodgeDart implements CarroProductInterface
{
    public function acelerar()
    {
        echo 'Acelerando Dodge Dart';
    }

    public function frear()
    {
        echo 'Freando Dodge Dart';
    }

    public function trocarMarcha()
    {
        echo 'Trocando marcha do Dodge Dart';
    }
}