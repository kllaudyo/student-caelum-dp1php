<?php

/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 04/09/17
 * Time: 20:01
 */
class EnviarPorEmail implements AcoesAoGerarNota
{
    public function executar(NotaFiscal $nf)
    {
        Log::info("Enviando por email");
    }
}