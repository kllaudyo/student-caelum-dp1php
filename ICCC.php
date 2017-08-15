<?php

/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 03/08/17
 * Time: 22:20
 */
class ICCC extends IImposto
{
    function __construct(IImposto $imposto = null)
    {
        parent::__construct($imposto);
    }

    public function calcula(Orcamento $orcamento)
    {
        if($orcamento->getValor() < 1000){
            return ($orcamento->getValor() * 0.05) + $this->calcularOutroImposto($orcamento);
        }else if($orcamento->getValor() >= 1000 && $orcamento->getValor() <= 3000){
            return ($orcamento->getValor() * 0.07) + $this->calcularOutroImposto($orcamento);;
        }else{
            return ($orcamento->getValor() * 0.08 + 30) + $this->calcularOutroImposto($orcamento);;
        }
    }
}