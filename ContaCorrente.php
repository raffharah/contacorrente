<?php

class ContaCorrente
{
    private int $numeroConta;
    private string $titular;
    private string $cpf;
    private float $saldo;

    public function getConta(): int
    {
        return $this->numeroConta;
    }

    public function setConta(int $numeroConta): void
    {
        $this->numeroConta = $numeroConta;
    }

    public function getTitular(): string
    {
       return $this->titular;
    }

    public function setTitular(string $titular): void
    {
        $this->titular = $titular;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }
    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
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