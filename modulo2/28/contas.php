<?php
require_once 'conta.php';
require_once 'contacorrente.php';
require_once 'contapopanca.php';

$p =new ContaPoupanca('100', '123123', 500);
echo $p->getSaldo() . '<br>';
$p-> depositar(200);
echo $p->getSaldo() . '<br>';
$p-> retirar(100);
echo $p->getSaldo() . '<br>';

/*
echo'<pre>';
var_dump($p);
echo '<pre>';*/
