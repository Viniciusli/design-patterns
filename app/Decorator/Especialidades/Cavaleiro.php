<?php

namespace App\Decorator\Especialidades;

use App\Decorator\Personagem;

class Cavaleiro extends Personagem
{
    public function __construct()
    {
        $this->nome = 'Cavaleiro';
        $this->ataque = 13;
    }
}