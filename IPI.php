<?php

/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 03/08/17
 * Time: 21:57
 */
class IPI extends IImposto
{
    function __construct(IImposto $imposto = null)
    {
        parent::__construct($imposto);
    }

    public function calcula(Orcamento $orcamento){
        return ($orcamento->getValor() * 0.12) + $this->calcularOutroImposto($orcamento);;
    }
}