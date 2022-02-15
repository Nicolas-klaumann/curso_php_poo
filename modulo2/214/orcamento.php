<?php

require_once 'OrcavelInterface.php';
require_once 'Orcamento.php';
require_once 'Servico.php';
require_once 'Produto.php';

$orc = new Orcamento;
$orc->adiciona(new Produto('Maquina de Cafe', 10, 299),1);
$orc->adiciona(new Produto('Barbeador eletrico', 10, 170),1);
$orc->adiciona(new Produto('Barra de chocolate', 10, 7),3);

$orc->adiciona( new Servico('Conserto', 20), 1);
$orc->adiciona( new Servico('Manutenção', 30), 2);

print $orc->calculaTotal();

//23:25