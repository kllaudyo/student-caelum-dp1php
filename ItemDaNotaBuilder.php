<?php

/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 22/08/17
 * Time: 21:45
 */
class ItemDaNotaBuilder
{
    private $nome;
    private $valor;

    public function setNome($nome){
        $this->nome = $nome;
        return $this;
    }

    public function setValor($valor){
        $this->valor = $valor;
        return $this;
    }

    public function build(){
        return new ItemDaNota($this->nome, $this->valor);
    }
}