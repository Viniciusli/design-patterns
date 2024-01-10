<?php

namespace App\Observer\Interfaces;

interface Subject
{
    public function adicionarObserver(Observer $observer);
    public function removerObserver(Observer $observer);
    public function notificarObserver(string $codigoProduto);
}