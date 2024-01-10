<?php

namespace App\Memento;

class Texto
{
    protected string $texto;
    protected TextoCareTaker $textoCareTaker;

    public function  __construct()
    {
        $this->texto = '';
        $this->textoCareTaker = new TextoCareTaker();
    }

    public function escreverTexto(string $texto): void
    {
        $this->textoCareTaker->adicionarMemento(
            new TextoMemento($this->texto)
        );

        $this->texto .= $texto;
    }

    public function desfazerEscrita(): void
    {
        $this->texto = $this->textoCareTaker
                            ->retornaUltimoEstadoSalvo()
                            ->getTexto();
    }

    public function retornaTexto(): string
    {
        return $this->texto;
    }
}