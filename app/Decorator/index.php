<?php

require_once '../../vendor/autoload.php';

use App\Decorator\Especialidades\Mago;
use App\Decorator\Itens\AnelDeFogo;
use App\Decorator\Itens\ColarDaForca;
use App\Decorator\Itens\EspadaMagica;

$decorator = new Mago();
$decorator = new AnelDeFogo($decorator);
$decorator = new AnelDeFogo($decorator);
$decorator = new ColarDaForca($decorator);
$decorator = new EspadaMagica($decorator);

echo $decorator->getNome();
echo "\n";

echo "Ataque: {$decorator->getAtaque()}";
echo "\n";
