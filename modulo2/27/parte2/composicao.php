<?php
require_once 'Caracteristica.php';
require_once '/Produto.php';

$p1 = new Produto('chocolate', 10, 7);
$p1-> addCaracteristica('Cor', 'Branco' );
$p1-> addCaracteristica('Peso', '500gr');

echo '<pre>';
print_r($p1);
echo '<pre>';

print 'Produto: ' . $p1->getDescricao() . '<br>';
foreach ($p1-> getCaracteristas() as $caracteristicas)
{
    $nome = $caracteristicas-> getNome();
    $valor = $caracteristicas->getValor();

        print "caracteristocas {$nome} = {$valor} <br>";
}