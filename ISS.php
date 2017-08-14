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
        if($orcamento->getValor() > 300){
            return $orcamento->getValor() * 0.15;
        }
        return $orcamento->getValor() * 0.1;
    }
}