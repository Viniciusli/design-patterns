<?php 

namespace App\Factory;

use App\Factory\Interfaces\CarroFactoryInterface;
use App\Factory\Interfaces\CarroProductInterface;
use App\Factory\Products\DodgeCharger;
use App\Factory\Products\DodgeDart;
use Exception;

class DodgeFactory implements CarroFactoryInterface
{
    public function criarCarro(string $modeloCarro): CarroProductInterface
    {
        switch ($modeloCarro) {
            case 'charger':
                return new DodgeCharger();
                break;
            case 'dart':
                return new DodgeDart();
                break;
            default:
                throw new Exception("Modelo de carro {$modeloCarro} não existe no sistema");
                break;
        }
    }
}