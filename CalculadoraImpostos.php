<?php

/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 03/08/17
 * Time: 21:38
 */
class CalculadoraImpostos
{
    public function calcula(Orcamento $orcamento, $imposto)
    {
        if($imposto == "ICMS"){
            return $orcamento->getValor() * 0.05;
        }else if($imposto == "ISS"){
            return $orcamento->getValor() * 0.1;
        }
    }
}