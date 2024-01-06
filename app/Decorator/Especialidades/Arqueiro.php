<?php

namespace App\Decorator\Especialidades;

use App\Decorator\Personagem;

class Arqueiro extends Personagem
{
    public function __construct()
    {
        $this->nome = 'Arqueiro';
        $this->ataque = 9;
    }
}