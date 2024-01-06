<?php

namespace App\Decorator\Itens;

use App\Decorator\Personagem;
use App\Decorator\PersonagemDecorator;

class EspadaMagica extends PersonagemDecorator
{
    public function __construct(Personagem $personagem)
    {
        parent::__construct($personagem);
        $this->ataque = 5;
    }
}