<?php

/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 14/08/17
 * Time: 21:02
 */
class ICPP extends TemplateImpostoCondicional
{
    public  function deveUsarOMaximo(Orcamento $orcamento)
    {
        return $orcamento->getValor()>500;
    }

    public  function taxacaoMinima(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.05;
    }

    public  function taxacaoMaxima(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.07;
    }
}