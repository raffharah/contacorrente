<?php

class ContaCorrente
{
    public function __construct(private int $numeroConta, private string $titular, private string $cpf, private string $email, private string $celular, private float $saldo)
    {
    }
    //Getters
    public function getConta(): int
    {
        return $this->numeroConta;
    }
    public function getTitular(): string
    {
        return $this->titular;
    }
    public function getCpf(): string
    {
        return $this->cpf;
    }
    public function getEmail(): string
    {
        return $this->email;
    }
    public function getCelular(): string
    {
        return $this->celular;
    }
    //Setters
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
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
    public function setCelular(string $celular): void
    {
        $this->celular = $celular;
    }
}