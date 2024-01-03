<?php

namespace App\Builder;

use App\Builder\Product\FogueteProduct;

class FabricaFoguetesDirector
{
    protected $construtorDeFoguetes;

    public function __construct(FogueteBuilder $fogueteBuilder)
    {
        $this->construtorDeFoguetes = $fogueteBuilder;
    }

    public function foguete(): FogueteProduct
    {
        return $this->construtorDeFoguetes->foguete();
    }

    public function build()
    {
        $this->construtorDeFoguetes->buildModelo();
        $this->construtorDeFoguetes->buildLitrosCombustivel();
        $this->construtorDeFoguetes->buildMotores();
        $this->construtorDeFoguetes->buildLugares();
    }
}