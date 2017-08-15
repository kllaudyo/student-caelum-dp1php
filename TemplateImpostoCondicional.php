<?php

/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 14/08/17
 * Time: 20:46
 */
abstract class TemplateImpostoCondicional implements IImposto
{
    public function calcula(Orcamento $orcamento)
    {
        if($this->deveUsarOMaximo($orcamento)){
            return $this->taxacaoMaxima($orcamento);
        }else{
            return $this->taxacaoMinima($orcamento);
        }
    }

    public abstract function deveUsarOMaximo(Orcamento $orcamento);
    public abstract function taxacaoMaxima(Orcamento $orcamento);
    public abstract function taxacaoMinima(Orcamento $orcamento);

}