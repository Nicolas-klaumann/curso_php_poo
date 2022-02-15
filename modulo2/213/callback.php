<?php
function apresenta($nome){
    print "Ola $nome";
}

//apresenta('Pablo');
$funcao = 'apresenta';
call_user_func($funcao, 'nicolas');

echo '<br>';

class Pessoa 
{
    public static function apresenta($nome){
        print "Ola $nome";
    }

}

//Pessoa::apresenta('Nicolas');

$classe = 'Pessoa';
$metodo = 'apresenta';

call_user_func([$classe, $metodo], 'Nicolas');

echo '<br>';

$obj = new Pessoa;
call_user_func([$obj, $metodo], 'Nicolas');