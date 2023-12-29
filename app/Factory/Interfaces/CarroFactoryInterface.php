<?php

namespace App\Factory\Interfaces;

interface CarroFactoryInterface
{
    public function criarCarro(string $modeloCarro): CarroProductInterface;
}