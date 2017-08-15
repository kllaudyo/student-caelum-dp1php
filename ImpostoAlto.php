<?php

/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 15/08/17
 * Time: 19:57
 */
class ImpostoAlto extends IImposto
{

    function __construct(IImposto $imposto = null)
    {
        parent::__construct($imposto);
    }

    public  function calcula(Orcamento $orcamento)
    {
        return ($orcamento->getValor() * 0.2) +  + $this->calcularOutroImposto($orcamento);
    }

}