<?php
require_once 'Record.php';

class Produto extends Record
{
    const TABLENAME = 'produto';
}

$x = new Produto;
$x->preco = 10;
$x->nome = 'Chocolate';
print $x->save();

echo '<br>';
print $x->delete(10);

echo '<br>';
print $x->delete(7);