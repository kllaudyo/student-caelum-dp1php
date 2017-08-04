<?php
/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 03/08/17
 * Time: 21:39
 */

    function autoload($class){
        include "{$class}.php";
    }

    spl_autoload_register("autoload");

    $reforma = new Orcamento(5000);

    $calculadora = new CalculadoraImpostos();

    print $calculadora->calcula($reforma,new ICMS());

    print "<br />";

    print $calculadora->calcula($reforma, new ISS());

    print "<br />";

    print $calculadora->calcula($reforma, new IPI());

    print "<br />";

    print $calculadora->calcula($reforma, new ICCC());

    assert($calculadora->calcula(new Orcamento(100), new ICCC()), 5);

    /*
     * Strategy
     * Cria uma interface que encapsula o comportamento. Ex: IImposto
     * Cria uma classe para cada comportamento implementando a interface. Ex: ICMS, IPI, ISS
     * Cria uma classe que executa o comportamento. Ex: CalculaImposto
     */