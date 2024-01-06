<?php

namespace App\Decorator;

abstract class Personagem
{
    protected $nome;
    protected $ataque;

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getAtaque(): float
    {
        return $this->ataque;
    }
}