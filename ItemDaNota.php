<?php

/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 22/08/17
 * Time: 21:42
 */
class ItemDaNota
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