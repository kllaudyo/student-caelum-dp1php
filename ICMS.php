<?php

/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 03/08/17
 * Time: 21:50
 */
class ICMS implements Imposto
{
    public function calcula(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.05;
    }
}