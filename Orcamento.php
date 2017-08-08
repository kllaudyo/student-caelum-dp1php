<?php

/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 03/08/17
 * Time: 21:37
 */
class Orcamento
{
    private $valor;
    private $itens;

    function __construct($valor)
    {
        $this->valor = $valor;
        $this->itens = Array();
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function getItens()
    {
        return $this->itens;
    }

    public function addItem(Item $item){
        $this->itens[] = $item;
    }

}