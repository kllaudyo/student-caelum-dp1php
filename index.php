<?php

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

    $reforma = new Orcamento(501);
    $reforma->addItem(new Item("tijolo", 251));
    $reforma->addItem(new Item("tijolo", 250));
    $reforma->addItem(new Item("LAPIS", 250));
    $reforma->addItem(new Item("cimento", 250));

    $calculadora = new CalculadoraImpostos();

    //print $calculadora->calcula($reforma, new IPI(new ImpostoAlto())) ."\n\r";
    print $calculadora->calcula($reforma, new IKCV(new ICPP()))."\n\r";
    //$reforma->aplicaDesconto();
    //print $reforma->getValor()."\n\r";
    $reforma->aprova();
    $reforma->aplicaDesconto();
    print $reforma->getValor()."\n\r";
    //$reforma->finaliza();
    $reforma->aplicaDesconto();
    print $reforma->getValor()."\n\r";


//
//    print $calculadora->calcula($reforma, new IHIT()) . "\n\r";
//
//    print $calculadora->calcula($reforma, new IKCV()) . "\n\r";
//
//    print $calculadora->calcula($reforma,new ICMS(new IKCV()));
//
//    print "\n\r";
//
//    print $calculadora->calcula($reforma, new ISS());
//
//    print "\n\r";
//
//    print $calculadora->calcula($reforma, new IPI());
//
//    print "\n\r";
//
//    print $calculadora->calcula($reforma, new ICCC());
//
//
//
//    /*
//     * Chain of Responsability
//     * Monta uma cadeia que vai seguindo até se encontrar uma opção que satisfaça a necessidade
//     *
//     */
//
//    print "Descontos \n\r";
//
//    $calculadoraDesconto = new CalculadoraDeDesconto();
//
//    print "Desconto: " . $calculadoraDesconto->desconto($reforma) . "\n\r";

