<?php

use App\singleton\LogsSingleton;

$instancia = LogsSingleton::obterInstancia();

$novaInstancia = LogsSingleton::obterInstancia();

if ($instancia === $novaInstancia) {
    echo 'As instâncias são exatamente as mesmas!';
}
