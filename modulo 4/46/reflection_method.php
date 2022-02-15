<?php
require_once 'veiculo.php';

$rm = new ReflectionMethod('Automovel', 'setPlaca');

print $rm->getName();
echo '<br>';
print $rm->isPrivate() ? 'É private' : 'Não é private';
echo '<br>';
print $rm->isStatic() ? 'É estatico' : 'Não é estatico';
echo '<br>';