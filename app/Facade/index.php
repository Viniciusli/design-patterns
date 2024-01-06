<?php

require_once '../../vendor/autoload.php';

use App\Facade\BibliotecaFacade;

$bibliotecaFacade = new BibliotecaFacade();

$codigoLivro = '123456';
$cpfCliente = '12345678998';

$efetuouRetirada = $bibliotecaFacade->efetuaRetirada($codigoLivro, $cpfCliente);

if ($efetuouRetirada) {
    $bibliotecaFacade->disparaMensagens($codigoLivro, $cpfCliente, 'CHAVE_API', 'SENHA_API');
}
