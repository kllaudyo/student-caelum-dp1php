<?php

/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 04/09/17
 * Time: 20:10
 */
class Multiplicador implements AcoesAoGerarNota
{
    private $taxa;

    function __construct($taxa)
    {
        $this->taxa = $taxa;
    }

    public function executar(NotaFiscal $nf)
    {
        Log::info("Taxa é: " . (($nf->getValorBruto() + $nf->getValorImpostos()) * $this->taxa));
    }
}