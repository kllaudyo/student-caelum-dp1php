<?php

/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 07/08/17
 * Time: 21:08
 */
class Desconto500Reais
{
    public function desconto(Orcamento $orcamento)
    {
        if($orcamento->getValor() > 500)
        {
            return $orcamento->getValor() * 0.05;
        }
        return 0;
    }
}