<?php

/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 14/08/17
 * Time: 21:04
 */
class IKCV extends TemplateImpostoCondicional
{

    public  function deveUsarOMaximo(Orcamento $orcamento)
    {
        if($orcamento->getValor() > 500){
            foreach ($orcamento->getItens() as $item){
                if($item->getValor()>100){
                    return true;
                }
            }
        }
        return false;
    }

    public  function taxacaoMinima(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.06;
    }

    public  function taxacaoMaxima(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.10;
    }

}