<?php

namespace App\Decorator\Especialidades;

use App\Decorator\Personagem;

class Mago extends Personagem
{
    public function __construct()
    {
        $this->nome = 'Mago';
        $this->ataque = 10;
    }
}