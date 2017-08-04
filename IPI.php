<?php

/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 03/08/17
 * Time: 21:57
 */
class IPI
{
    public function calcula(Orcamento $orcamento){
        return $orcamento->getValor() * 0.12;
    }
}