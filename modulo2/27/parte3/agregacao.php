<?php
require_once 'Cesta.php';
require_once './../Produto.php';

$c1 = new Cesta;

$p1 = new Produto ('chocolate', 10, 5);
$p1 = new Produto ('cafe', 100, 7);
$p1 = new Produto ('mostarda', 50, 3);

$c1->addItem( $p1);
$c1->addItem( $p2);
$c1->addItem( $p3);

foreach ($c1-getItens() as $item)
{
    print "Item: {$item->getDescricao()} <br>";
}

//9:41