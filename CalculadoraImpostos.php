<?php

/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 03/08/17
 * Time: 21:38
 */

require_once "ICMS.php";
require_once "ISS.php";

class CalculadoraImpostos
{
    public function calcula(Orcamento $orcamento, $imposto)
    {
        if($imposto == "ICMS"){
            $icms = new ICMS();
            return $icms->calcula($orcamento);
        }else if($imposto == "ISS"){
            $iss = new ISS();
            return $iss->calcula($orcamento);
        }
    }
}