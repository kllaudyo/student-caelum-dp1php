<?php

/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 07/08/17
 * Time: 20:48
 */
class Item
{
    private $nome;
    private $valor;

    function __construct($nome, $valor)
    {
        $this->nome = $nome;
        $this->valor = $valor;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getValor()
    {
        return $this->valor;
    }

}