<?php
/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 03/08/17
 * Time: 21:39
 */

    require_once "Orcamento.php";
    require_once "CalculadoraImpostos.php";

    $reforma = new Orcamento(500);

    $calculadora = new CalculadoraImpostos();

    echo $calculadora->calcula($reforma,"ICMS");

    echo "<br />";

    print $calculadora->calcula($reforma, "ISS");