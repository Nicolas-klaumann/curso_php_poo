<?php
require_once 'conta2.php';
require_once 'contacorrente2.php';
require_once 'contapoupanca2.php';

$contas = [];
$contas[] = new ContaCorrente(1234, 'CC.1234', 100, 500);
$contas[] = new ContaPoupanca(1235, 'PP.4566', 100);

foreach ($contas as $conta) {
    if ($conta instanceof Conta) {
        print ($conta->getInfo() . '<br>');
        print ("--Saldo atual: {$conta->getSaldo()} <br>");

        $conta->depositar(200);
        print "--Deposito de 200 <br>";
        print "--Saldo atual: {$conta->getSaldo()} <br>";

        if ($conta->retirar(700)) {
            print "--Retirada de 700 (OK) <br>";
        } else {
            print "--Retirada de 700 (não permitidade) <br>";
        }
        print "--Saldo atual: {$conta->getSaldo()} <br>";

    }
}