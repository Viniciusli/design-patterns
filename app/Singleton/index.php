<?php

require_once '../../vendor/autoload.php';

use App\Singleton\Singleton;

$instancia = Singleton::getInstancia();
$novainstancia = Singleton::getInstancia();

if ($instancia === $novainstancia) {
    echo 'As instancias são iguais';
}
