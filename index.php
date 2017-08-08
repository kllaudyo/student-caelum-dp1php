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


    /*
    * Strategy
    * Cria uma interface que encapsula o comportamento. Ex: IImposto
    * Cria uma classe para cada comportamento implementando a interface. Ex: ICMS, IPI, ISS
    * Cria uma classe que executa o comportamento. Ex: CalculaImposto
    */

    $reforma = new Orcamento(300);

    $calculadora = new CalculadoraImpostos();

    print $calculadora->calcula($reforma,new ICMS());

    print "<br />";

    print $calculadora->calcula($reforma, new ISS());

    print "<br />";

    print $calculadora->calcula($reforma, new IPI());

    print "<br />";

    print $calculadora->calcula($reforma, new ICCC());

    print "<h1>Descontos</h1>";

    $calculadoraDesconto = new CalculadoraDeDesconto();

    $reforma->addItem(new Item("tijolo", 251));
    $reforma->addItem(new Item("cimento", 250));
    $reforma->addItem(new Item("cimento", 250));
    $reforma->addItem(new Item("cimento", 250));
    $reforma->addItem(new Item("cimento", 250));

    print "Desconto: " . $calculadoraDesconto->desconto($reforma);

