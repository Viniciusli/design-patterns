<?php

namespace App\Prototype;

class LivroPhpPrototype extends LivroPrototype
{
    public function __clone()
    {
        echo "Livro PHP clonado";
    }

    public function __construct()
    {
        $this->setAssunto('PHP');
    }
}