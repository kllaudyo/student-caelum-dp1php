<?php

/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 03/08/17
 * Time: 21:38
 */

class CalculadoraImpostos
{
    public function calcula(Orcamento $orcamento, Imposto $imposto)
    {
            return $imposto->calcula($orcamento);
    }
}