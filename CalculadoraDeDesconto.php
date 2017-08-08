<?php

/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 07/08/17
 * Time: 20:51
 */
class CalculadoraDeDesconto
{
    public function desconto(Orcamento $orcamento){

        if(count($orcamento->getItens())>=5)
        {
            return $orcamento->getValor() * 0.1;
        }
        else if($orcamento->getValor() > 500)
        {
            return $orcamento->getValor() * 0.05;
        }
        else
        {
            return 0;
        }

    }
}