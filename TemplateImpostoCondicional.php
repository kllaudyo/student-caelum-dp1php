<?php

/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 14/08/17
 * Time: 20:46
 */
abstract class TemplateImpostoCondicional extends IImposto
{
    function __construct(IImposto $imposto = null)
    {
        parent::__construct($imposto);
    }

    public final function calcula(Orcamento $orcamento)
    {
        if($this->deveUsarOMaximo($orcamento)){
            return $this->taxacaoMaxima($orcamento) + $this->calcularOutroImposto($orcamento);
        }else{
            return $this->taxacaoMinima($orcamento) + $this->calcularOutroImposto($orcamento);
        }
    }

    public abstract function deveUsarOMaximo(Orcamento $orcamento);
    public abstract function taxacaoMaxima(Orcamento $orcamento);
    public abstract function taxacaoMinima(Orcamento $orcamento);

}