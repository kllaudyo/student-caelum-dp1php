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

        $desconto5Itens = new Desconto5Itens();
        $desconto500Reais = new Desconto500Reais();
        $descontoCasado = new DescontoPorVendaCasada();
        $desconto300Reais = new Desconto300Reais();
        $semDesconto = new SemDesconto();

        $desconto5Itens->setProximoDesconto($desconto500Reais);
        $desconto500Reais->setProximoDesconto($descontoCasado);
        $descontoCasado->setProximoDesconto($desconto300Reais);
        $desconto300Reais->setProximoDesconto($semDesconto);

        $valorDesconto = $desconto5Itens->desconto($orcamento);
        return $valorDesconto;

    }
}