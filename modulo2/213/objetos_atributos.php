<?php

use Funcionario as GlobalFuncionario;

class Funcionario 
{
    public $nome;
    public $salario;
    public $departamento;

}
$jose = new Funcionario;
$jose-> nome = 'Jose da Silva';
$jose->salario = 2000;
$jose->departamento = 'Financeiro';

echo '<pre>';
print_r( get_object_vars($jose));
echo '<pre>';