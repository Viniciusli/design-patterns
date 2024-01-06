<?php

namespace App\Facade;

use App\Facade\Modulos\ApiSms;
use App\Facade\Modulos\ControleClientes;
use App\Facade\Modulos\ControleEstoque;
use App\Facade\Modulos\Email;
use Exception;

class BibliotecaFacade
{
    protected ControleEstoque $controleEstoque;
    protected ControleClientes $controleClientes;
    protected ApiSms $apiSms;
    protected Email $email;

    public function __construct()
    {
        $this->controleEstoque = new ControleEstoque();
        $this->controleClientes = new ControleClientes();
        $this->apiSms = new ApiSms();
        $this->email = new Email();
    }

    public function efetuaRetirada(string $codigoLivro, string $cpfCliente): bool
    {
        if (!$this->controleEstoque->validaEstoque($codigoLivro)) {
            throw new Exception('Estoque indisponível');
        }

        return $this->controleEstoque->registraRetirada($codigoLivro, $cpfCliente);
    }

    public function disparaMensagens(
        string $codigoLivro,
        string $cpfCliente,
        string $apiKey,
        string $apiPass
    ): bool {
        $cliente = $this->controleClientes->buscarCliente($cpfCliente);
        $mensagem = "Aluguel de livro de código {$codigoLivro} efetuado com sucesso!";

        if ($this->email->validaServidorDeEmails()) {
            $this->email->enviaMensagem(
                'Biblioteca de Teste',
                $cliente['nome'],
                $cliente['email'],
                $mensagem,
            );
        }

        $token = $this->apiSms->geraTokenApi($apiKey, $apiPass);

        $this->apiSms->enviaSms(
            $token,
            'Biblioteca de Teste',
            $cliente['nome'],
            $cliente['telefone'],
            $mensagem,
        );

        return true;
    }
}