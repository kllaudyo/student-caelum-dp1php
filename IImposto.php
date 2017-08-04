<?php

/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 03/08/17
 * Time: 22:01
 */
interface IImposto
{
    public function calcula(Orcamento $orcamento);
}