<?php

namespace App\Facade\Modulos;

class ControleEstoque
{
    public function registraRetirada(string $codigoLivro, string $cpfCliente): bool
    {
        // efetua o registro da retirada do livro
        return true;
    }

    public function validaEstoque(string $codigoLivro): bool
    {
        // valida se possui estoque
        echo "Registro de retirada efetuado com sucesso.\n";
        return true;
    }
}