<?php
require_once 'Record.php';

class Produto extends Record
{
    const TABLENAME = 'produto';
    use ObjectConversionTrait;
}

trait ObjectConversionTrait 
{
    public function toXML() {
        $xml = new SimpleXMLElement('<'.get class($this) . '/>');
        foreach ($this->data as $key => $value) {
            $xml -> addChild($key, $value);
        }
        return $xml->asXML();
    }

    public function toJSON() {
        return json encode($this->data);
    }
}

$produto = new Produto;
$produto->preco = 2;
$produto->nome = 'Chocolate';
$produto->estoque = 100;

print $produto->toJSON();
print $produto->toXML();
