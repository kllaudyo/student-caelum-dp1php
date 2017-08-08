<?php

/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 07/08/17
 * Time: 21:30
 */

class Desconto300Reais implements Desconto
{
    private $proximoDesconto;

    public function desconto(Orcamento $orcamento)
    {
        if($orcamento->getValor() >= 300){
            return $orcamento->getValor() * 0.01;
        }else{
            return $this->proximoDesconto->desconto($orcamento);
        }
    }

    public function setProximoDesconto(Desconto $desconto)
    {
        $this->proximoDesconto = $desconto;
    }
}