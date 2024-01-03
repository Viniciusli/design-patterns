<?php

use App\Builder\FabricaFoguetesDirector;
use App\Builder\FogueteModeloIBuilder;
use App\Builder\FogueteModeloIIBuilder;

require_once '../../vendor/autoload.php';

$montadoraDeFoguetesTestI = new FabricaFoguetesDirector(new FogueteModeloIBuilder());
$montadoraDeFoguetesTestII = new FabricaFoguetesDirector(new FogueteModeloIIBuilder());

$montadoraDeFoguetesTestI->build();
echo $montadoraDeFoguetesTestI->foguete();

$montadoraDeFoguetesTestII->build();
echo $montadoraDeFoguetesTestII->foguete();
