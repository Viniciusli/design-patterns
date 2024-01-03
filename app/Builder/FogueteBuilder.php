<?php

namespace App\Builder;

use App\Builder\Product\FogueteProduct;

abstract class FogueteBuilder
{
    protected $foguete;

    public function __construct()
    {
        $this->foguete = new FogueteProduct();
    }

    public function foguete(): FogueteProduct
    {
        return  $this->foguete;
    }

    abstract public function buildModelo();
    abstract public function buildLitrosCombustivel();
    abstract public function buildMotores();
    abstract public function buildLugares();
}