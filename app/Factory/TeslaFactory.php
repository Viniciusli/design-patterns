<?php 

namespace App\Factory;

use App\Factory\Interfaces\CarroFactoryInterface;
use App\Factory\Interfaces\CarroProductInterface;
use App\Factory\Products\TeslaModeloS;
use App\Factory\Products\TeslaModeloX;
use Exception;

class TeslaFactory implements CarroFactoryInterface
{
    public function criarCarro(string $modeloCarro): CarroProductInterface
    {
        switch ($modeloCarro) {
            case 'modelo_x':
                return new TeslaModeloX();
                break;
            case 'modelo_s':
                return new TeslaModeloS();
                break;
            default:
                throw new Exception("Modelo de carro {$modeloCarro} não existe no sistema");
                break;
        }
    }
}