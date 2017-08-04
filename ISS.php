<?php

/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 03/08/17
 * Time: 21:51
 */
class ISS implements IImposto
{
    public function calcula(Orcamento $orcamento){
        return $orcamento->getValor() * 0.06;
    }
}