<?php

namespace App\Facade\Modulos;

class ControleClientes
{
    public function buscarCliente(string $cpfCliente): array
    {
        return [
            'nome' => 'Vini Lee',
            'telefone' => '91985265049',
            'email' => 'vinilee34@gmail.com',
        ];
    }
}