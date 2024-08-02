<?php
require __DIR__ . "/function.php";
require __DIR__ . "/ContaCorrente.php";

$contaCorrente1 = criaContaCorrente();
$contaCorrente1->setConta(78291);
$contaCorrente1->setTitular("Tio Ben");
$contaCorrente1->setCpf("12345678910");
$contaCorrente1->setSaldo(1000);

echo getConta();