<?php

/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 07/08/17
 * Time: 21:16
 */
interface Desconto
{
    public function desconto(Orcamento $orcamento);
    public function setProximoDesconto(Desconto $desconto);
}