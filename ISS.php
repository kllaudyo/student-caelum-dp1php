<?php

/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 03/08/17
 * Time: 21:51
 */
class ISS extends TemplateImpostoCondicional
{

    public  function deveUsarOMaximo(Orcamento $orcamento)
    {
        return $orcamento->getValor() > 300;
    }

    public  function taxacaoMinima(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.1;
    }

    public  function taxacaoMaxima(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.15;
    }

}