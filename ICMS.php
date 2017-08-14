<?php

/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 03/08/17
 * Time: 21:50
 */
class ICMS implements IImposto
{
    public function calcula(Orcamento $orcamento)
    {
        if($orcamento->getValor()>500){
            return $orcamento->getValor() * 0.15;
        }else {
            return ($orcamento->getValor() * 0.05);
        }
    }
}