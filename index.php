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

    print "\n\r";

    print $calculadora->calcula($reforma, new ISS());

    print "\n\r";

    print $calculadora->calcula($reforma, new IPI());

    print "\n\r";

    print $calculadora->calcula($reforma, new ICCC());


    /*
     * Chain of Responsability
     * Monta uma cadeia que vai seguindo até se encontrar uma opção que satisfaça a necessidade
     *
     */

    print "Descontos \n\r";

    $calculadoraDesconto = new CalculadoraDeDesconto();

    $reforma->addItem(new Item("tijolo", 251));
    $reforma->addItem(new Item("CANETA", 250));
    $reforma->addItem(new Item("LAPIS", 250));
    $reforma->addItem(new Item("cimento", 250));

    print "Desconto: " . $calculadoraDesconto->desconto($reforma) . "\n\r";

