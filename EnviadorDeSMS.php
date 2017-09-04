<?php

/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 04/09/17
 * Time: 19:54
 */

class EnviadorDeSMS implements AcoesAoGerarNota
{
    public function executar(NotaFiscal $nf)
    {
        Log::info("Enviando sms");
    }
}