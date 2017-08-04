<?php
/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 03/08/17
 * Time: 21:39
 */

    require_once "Orcamento.php";
    require_once "Imposto.php";
    require_once "CalculadoraImpostos.php";
    require_once "ICMS.php";
    require_once "ISS.php";
    require_once "IPI.php";

    $reforma = new Orcamento(500);

    $calculadora = new CalculadoraImpostos();

    print $calculadora->calcula($reforma,new ICMS());

    print "<br />";

    print $calculadora->calcula($reforma, new ISS());

    print "<br />";

    print $calculadora->calcula($reforma, new IPI());