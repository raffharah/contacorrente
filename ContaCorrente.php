<?php

class ContaCorrente
{
    public function getConta(): int
    {
        return $this->numeroConta;
    }
    public function getTitular(): string
    {
        return $this->titular;
    }
    public function setTitular(string $titular): void
    {
        $this->titular = $titular;
    }
    public function getSaldo(): float
    {
        return $this->saldo;
    }
    public function setSaldo(float $saldo): void
    {
        $this->saldo = $saldo;
    }
}