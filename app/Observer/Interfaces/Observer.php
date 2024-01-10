<?php

namespace App\Observer\Interfaces;

interface Observer
{
    public function atualizado(string $codigo);
}