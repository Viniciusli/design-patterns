<?php

namespace App\Observer;

use App\Observer\Interfaces\Observer;
use App\Observer\Interfaces\Subject;

class ControleEstoque implements Subject
{
    private array $observers;

    public function atualizarEstoqueProduto(string $codigoProduto, int $novaQuantidade)
    {
        if ($novaQuantidade == 0) {
            $this->notificarObserver($codigoProduto);
        }
    }

    public function adicionarObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function removerObserver(Observer $observerRemover)
    {
        foreach ($this->observers as $index => $observer) {
            if ($observer === $observerRemover) {
                unset($this->observers[$index]);
                return true;
            }
        }

        return false;
    }

    public function notificarObserver(string $codigoProduto)
    {
        foreach ($this->observers as $observer) {
            $observer->atualizado($codigoProduto);
        }
    }
}