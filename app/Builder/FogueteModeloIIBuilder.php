<?php

namespace App\Builder;

class FogueteModeloIIBuilder extends FogueteBuilder
{
    public function buildModelo()
    {
        $this->foguete()->setModelo('Foguete Modelo II');
    }

    public function buildLitrosCombustivel()
    {
        $this->foguete()->setLitrosCombustivel(850);
    }

    public function buildMotores()
    {
        $this->foguete()->setNumeroMotores(2);
    }

    public function buildLugares()
    {
        $this->foguete()->setNumeroLugares(6);
    }
}