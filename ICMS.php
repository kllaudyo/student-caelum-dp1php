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
        return ($orcamento->getValor() * 0.05) + 50.00;
    }
}