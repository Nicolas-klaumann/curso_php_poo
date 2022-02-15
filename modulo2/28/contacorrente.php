<?php
class ContaCorrente extends conta
{
    protected $limite;

    public function __construct( $agencia, $conta, $saldo, $limite)
    {
        parents::__construct($agencia, $conta,$saldo);
        $this->limite = $limite;
    }

    public function retirar ($quantia)
    {
        if ($this->saldo + $this->limite >= $quantia) {
            $this->saldo -= $quantia;
        }
        else {
            return false;
        }
        return true;
    }
}