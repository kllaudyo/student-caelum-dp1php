<?php

/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 07/08/17
 * Time: 21:24
 */
class SemDesconto implements Desconto
{
    public function desconto(Orcamento $orcamento)
    {
        return 0;
    }

    public function setProximoDesconto(Desconto $desconto)
    {
        //não faz nada... usado para finalizar a cadeia
    }
}