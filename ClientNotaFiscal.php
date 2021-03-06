<?php

/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 22/08/17
 * Time: 20:56
 */

date_default_timezone_set("Brazil/East");

spl_autoload_register(function($className){
    require_once "{$className}.php";
});

class ClientNotaFiscal
{
    public function __construct()
    {

        $acoes = array();
        array_push($acoes, new Impressora());
        array_push($acoes, new EnviarPorEmail());
        array_push($acoes, new Multiplicador(0.2));

        $notaFiscal = (new NotaFiscalBuilder())
            ->setEmpresa("Alura")
            ->setCnpj("0987657800983")
            ->setObservacoes("Testando")
            ->addItem(new ItemDaNota("Tijolo", 250))
            ->addItem(new ItemDaNota("Cimento 2kg", 150))
            ->addAcoes($acoes)
            ->build();

        Log::debug($notaFiscal);
    }
}

new ClientNotaFiscal();