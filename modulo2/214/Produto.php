<?php
class Produto implements OrcavelInterface
{
    private $descricao;
    private $estoque;
    private $produto;
    private $fabricante;
    private $caracteristica;


    public function addCaracteristicas($nome, $valor)
    {
        $this->caracteristicas[] = new Caracteristica($nome, $valor);
    }
    public function __construct($descricao, $estoque, $preco)
     {
        $this->descricao = $descricao;
        $this->estoque = $estoque;
        $this->preco = $preco;
     }
    public function getDescricao()
     {
         return $this->descricao;
     }
     public function setFabricante( Fabricante $fabricante)
     {
        $this->fabricante = $fabricante;
     }
     public function getFabricante()
     {
         return $this->fabricante;
     }
     public function getPreco(){
         return $this->preco;
     }
}