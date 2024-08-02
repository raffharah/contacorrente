<?php
require __DIR__ . "/ContaCorrente.php";

$contaCorrente1 = new ContaCorrente(87865, 'J. J. Jameson', "12345678910", "j.j.jameson@bol.com", "(11)91234-5679", 10000);
$contaCorrente2 = new ContaCorrente(21313, 'Tio Ben', "12345678911", "tio.ben@uol.com", "(11)91234-5678", 1000);
$contaCorrente3 = new ContaCorrente(21313, 'Tia May', "12345678912", "tia.may@uol.com", "(11)91234-5672", 1000);
$contaCorrente4 = new ContaCorrente(21313, 'Mary Jane', "12345678932", "mary.jane@google.com", "(11)91434-5672", 400);
$contaCorrente5 = new ContaCorrente(21313, 'Miranha', "12345678933", "eu.nao.sou.miranha@outlook.com", "(11)91232-5672", 100);
$contaCorrente6 = new ContaCorrente(21313, 'Tony Stark', "12341238933", "eu.sou.homemdeferro@stark.com", "(11)91232-7821", 10000000);

echo $contaCorrente4->deposita(-1) . "\n";
echo $contaCorrente1->saque(100000). "\n";

echo $contaCorrente1->getSaldo() . "\n";
echo $contaCorrente4->getSaldo();