<?php

namespace App\Facade\Modulos;

class Email
{
    public function validaServidorDeEmails(): bool
    {
        // valida se o server está on
        return true;
    }

    public function enviaMensagem(
        string $remetente,
        string $destinatario,
        string $email,
        string $mensagem
    ): bool {
        echo "email enviado com sucesso.\n";
        return true;
    }
}