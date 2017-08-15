<?php

/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 14/08/17
 * Time: 21:15
 */
class IHIT extends TemplateImpostoCondicional
{
    public  function deveUsarOMaximo(Orcamento $orcamento)
    {
        if(count($orcamento->getItens())>1){
            $nomes = [];
            foreach ($orcamento->getItens() as $item){
                if(in_array($item->getNome(), $nomes)) return true;
                $nomes[] = $item->getNome();
            }
        }
        return false;
    }

    public  function taxacaoMinima(Orcamento $orcamento)
    {
        return $orcamento->getValor() * (0.01 * count($orcamento->getItens()));
    }

    public  function taxacaoMaxima(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.13;
    }

}