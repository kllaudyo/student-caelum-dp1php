<?php

/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 07/08/17
 * Time: 21:06
 */
class Desconto5Itens
{
    public function desconto(Orcamento $orcamento)
    {
        if(count($orcamento->getItens())>=5)
        {
            return $orcamento->getValor() * 0.1;
        }
        return 0;
    }
}