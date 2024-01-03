<?php

namespace App\Builder\Product;

class FogueteProduct
{
    protected string $modelo;
    protected float $litrosCombustivel;
    protected int $numeroMotores;
    protected int $numeroLugares;

    public function __toString()
    {
        $result = "Foguete model: {$this->getModelo()}\n";
        $result .= "Litros do tanque: {$this->getLitrosCombustivel()}\n";
        $result .= "Número de motores: {$this->getNumeroMotores()}\n";
        $result .= "Número de lugares: {$this->getNumeroLugares()}\n";

        return $result;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function setModelo(string $modelo): FogueteProduct
    {
        $this->modelo = $modelo;
        return $this;
    }

    public function getLitrosCombustivel(): float
    {
        return $this->litrosCombustivel;
    }
    
    public function setLitrosCombustivel(float $litrosCombustivel): FogueteProduct
    {
        $this->litrosCombustivel = $litrosCombustivel;
        return $this;
    }

    public function getNumeroMotores(): int
    {
        return $this->numeroMotores;
    }

    public function setNumeroMotores(int $numeroMotores): FogueteProduct
    {
        $this->numeroMotores = $numeroMotores;
        return $this;
    }

    public function getNumeroLugares(): int
    {
        return $this->numeroLugares;
    }

    public function setNumeroLugares(int $numeroLugares): FogueteProduct
    {
        $this->numeroLugares = $numeroLugares;
        return $this;
    }
}
