<?php

require_once 'classes/ar/ProdutoComTransacaoELog.php';
require_once 'classes/api/Connection.php';
require_once 'classes/api/Transaction.php';
require_once 'classes/api/Logger.php';
require_once 'classes/api/LoggerTXT.php';

try 
{
    Transation::open('estoque');
    Transation::setLogger(new LoggerTXT('log.txt'));

    $produto = new Produto;
    $produto->descricao = 'Chocolate Branco';
    $produto->estoque = 70;
    $produto->preco_custo = 4;
    $produto->preco_venda = 7;
    $produto->codigo_barras = '213456';
    $produto->data_cadastro = date('Y-m-d');
    $produto->origem = 'N';
    $produto->save();
    Transation::close();

}
catch (Exception $e)
{
    print $e->getMessage();
}