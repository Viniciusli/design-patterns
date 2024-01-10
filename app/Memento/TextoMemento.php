<?php

namespace App\Memento;

class TextoMemento
{
    protected string $estadoTexto;
    
    public function __construct(string $estadoTexto)
    {
        $this->estadoTexto = $estadoTexto;
    }

    public function getTexto(): string
    {
        return $this->estadoTexto;
    }
}