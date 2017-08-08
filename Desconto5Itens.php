<?php

/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 07/08/17
 * Time: 21:06
 */
class Desconto5Itens implements Desconto
{

    private $proximoDesconto;

    public function desconto(Orcamento $orcamento)
    {
        if(count($orcamento->getItens())>5)
        {
            return $orcamento->getValor() * 0.1;
        }

        return $this->proximoDesconto->desconto($orcamento);
    }

    public function setProximoDesconto(Desconto $proximoDesconto)
    {
        $this->proximoDesconto = $proximoDesconto;
    }
}