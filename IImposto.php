<?php

/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 03/08/17
 * Time: 22:01
 */
abstract class IImposto
{
    protected $outroImposto;

    function __construct(IImposto $imposto = null){
        $this->outroImposto = $imposto;
    }

    public abstract function calcula(Orcamento $orcamento);

    public function calcularOutroImposto(Orcamento $orcamento){
        if(is_null($this->outroImposto)){
            return 0;
        }
        return $this->outroImposto->calcula($orcamento);
    }
}