<?php

namespace App\Facade\Modulos;


class ApiSms
{
    public function geraTokenApi(string $apiKey, string $apiPass): string
    {
        // simula geração de um token através da api de envio de sms
        return 'API_TOKEN';
    }

    public function enviaSms(
        string $tokenApi,
        string $rementente,
        string $destinatario,
        string $telefone,
        string $mensagem
    ): bool {
        // simula envia de mensagem sms via API
        echo "SMS enviado com sucessso\n";
        return true;
    }
}