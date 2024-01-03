<?php

namespace App\Builder;

class FogueteModeloIBuilder extends FogueteBuilder
{
    public function buildModelo()
    {
        $this->foguete()->setModelo('Foguete Modelo I');
    }

    public function buildLitrosCombustivel()
    {
        $this->foguete()->setLitrosCombustivel(1000);
    }

    public function buildMotores()
    {
        $this->foguete()->setNumeroMotores(3);
    }

    public function buildLugares()
    {
        $this->foguete()->setNumeroLugares(8);
    }
}