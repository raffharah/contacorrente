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
    public function deposita(float $deposito)
    {
        if ($deposito >= 1) {
            $this->saldo += $deposito;
            echo "Seu deposito de $$deposito foi efetuado com sucesso";
        } else {
            echo "Valor de depósito inválido.";
        }
    }
    public function saque(float $saque)
    {
        if ($saque > $this->saldo) {
            echo "Valor de saque inválido, saldo indisponivel.";
        } elseif ($saque <= 0) {
            echo "Valor de saque inválido.";
        } else{
            $this->saldo -= $saque;
            echo "Seu saque de $$saque foi efetuado com sucesso";
            return $this->saldo;
        }
    }
    public function transferencia(ContaCorrente $contaDestino, float $transferencia)
    {
     if ($transferencia > $this->saldo) {
         echo "Transferencia não efetuada por falta de saldo";
     } elseif ($transferencia <= 0) {
         echo "Para efetuar transferencia, o valor precisa ser válido.\nValor da tentativa $transferencia";
     }else{
         $this->saldo -= $transferencia;
         $contaDestino->saldo += $transferencia;
     }
    }
}