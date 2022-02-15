<?php

require_once 'classes/ar/ProdutoComTransacao.php';
require_once 'classes/api/Connection.php';
require_once 'classes/api/Transaction.php';

try
{
    Transation::open('estoque');
    $produto = new Produto;
    $produto->descricao = 'Chocolate Amargo';
    $produto->estoque = 80;
    $produto->preco_custo = 4;
    $produto->preco_venda = 7;
    $produto->codigo_barras = '345678';
    $produto->data_cadastro = date('Y-m-d');
    $produto->origem = 'N';
    $produto->save();
    Transation::close();

}
catch (Exception $e)
{
    Transation::rollback();
    print $e->getMessage();
}