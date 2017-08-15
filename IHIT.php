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
            foreach ($orcamento->getItens() as $key => $value){
                if($this->existeItemNoOrcamento($orcamento, $key, $value->getNome())){
                    return true;
                }
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

    private function existeItemNoOrcamento(Orcamento $orcamento, $ind, $nomeItem){
        foreach ($orcamento->getItens() as $key => $item){
            if($item->getNome() === $nomeItem && $key !== $ind ){
                return true;
            }
        }
    }
}