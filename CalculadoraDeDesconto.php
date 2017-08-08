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

        $desconto = new Desconto5Itens();
        $valorDesconto =  $desconto->desconto($orcamento);

        if($valorDesconto===0){
            $desconto = new Desconto500Reais();
            $valorDesconto = $desconto->desconto($orcamento);
        }

        return $valorDesconto;

    }
}