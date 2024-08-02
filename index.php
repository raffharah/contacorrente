<?php
require __DIR__ . "/ContaCorrente.php";

$contaCorrente1 = new ContaCorrente(78291, 'Tio Ben', "12345678910", "tio.ben@uol.com", "(11)91234-5678", 1000);

echo $contaCorrente1->getSaldo();