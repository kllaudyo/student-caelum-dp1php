<?php

/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 07/08/17
 * Time: 21:08
 */
class Desconto500Reais implements Desconto
{
    private $proximoDesconto;

    public function desconto(Orcamento $orcamento)
    {
        if($orcamento->getValor() > 500)
        {
            return $orcamento->getValor() * 0.07;
        }
        return $this->proximoDesconto->desconto($orcamento);
    }

    public function setProximoDesconto(Desconto $proximoDesconto)
    {
        $this->proximoDesconto = $proximoDesconto;
    }
}