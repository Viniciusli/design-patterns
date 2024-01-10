<?php

namespace App\Memento;

class TextoCareTaker
{
    protected array $estadosTexto = [];

    public function adicionarMemento(TextoMemento $textoMemento): void
    {
        $this->estadosTexto[] = $textoMemento;
    }

    public function retornaUltimoEstadoSalvo(): TextoMemento|null
    {
        if (empty($this->estadosTexto)) {
            return null;
        }

        $textoMemento = end($this->estadosTexto);
        unset($this->estadosTexto[count($this->estadosTexto) - 1]);
        return $textoMemento;
    }
}