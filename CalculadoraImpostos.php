<?php

/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 03/08/17
 * Time: 21:38
 */
class CalculadoraImpostos
{
    public function calculaICMS(Orcamento $orcamento){
        return $orcamento->getValor() * 0.05;
    }

    public function calculaISS(Orcamento $orcamento){
        return $orcamento->getValor() * 0.1;
    }

}