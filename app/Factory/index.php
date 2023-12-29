<?php

require_once '../../vendor/autoload.php';

use App\Factory\DodgeFactory;
use App\Factory\TeslaFactory;

$teslaFactory = new TeslaFactory();
$dodgeFactory = new DodgeFactory();

try {
    $teslaModeloS = $teslaFactory->criarCarro('modelo_s');
    $teslaModeloX = $teslaFactory->criarCarro('modelo_x');

    $dodgeCharger = $dodgeFactory->criarCarro('charger');
    $dodgeDart = $dodgeFactory->criarCarro('dart');

    echo $teslaModeloS->acelerar();
    echo $teslaModeloS->frear();
    echo $teslaModeloS->trocarMarcha();
    echo PHP_EOL;

    echo $dodgeCharger->acelerar();
    echo $dodgeCharger->frear();
    echo $dodgeCharger->trocarMarcha();
    echo PHP_EOL;

    echo $teslaModeloX->acelerar();
    echo $teslaModeloX->frear();
    echo $teslaModeloX->trocarMarcha();
    echo PHP_EOL;

    echo $dodgeDart->acelerar();
    echo $dodgeDart->frear();
    echo $dodgeDart->trocarMarcha();
    echo PHP_EOL;
} catch (Exception $e) {
    echo $e->getMessage();
}
