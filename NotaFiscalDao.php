<?php

/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 24/08/17
 * Time: 21:09
 */
class NotaFiscalDao implements AcoesAoGerarNota
{
    public function executar(NotaFiscal $notaFiscal)
    {
        Log::info("Eu mandei para salvar no banco");
    }
}