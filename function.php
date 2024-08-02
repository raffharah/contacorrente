<?php
require __DIR__ . "/ContaCorrente.php";
function criaContaCorrente(): ContaCorrente{
    $conta = new ContaCorrente();
    $numeroConta = $conta->numeroConta();
    $titular = $conta->titular();
    $saldo = $conta->saldo();
    $cpf = $conta->cpf();
    return $conta;
}
