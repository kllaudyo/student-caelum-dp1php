<?php

class Finalizado implements IEstado
{
    public function aplica(Orcamento $orcamento)
    {
        throw new Exception("Um orçamento finalizado não pode receber descontos");
    }

    public function aprova(Orcamento $orcamento)
    {
        throw new Exception("Um orçamento finalizado não pode ser aprovado");
    }

    public function reprova(Orcamento $orcamento)
    {
        throw new Exception("Um orçamento finalizado não pode ser reprovado");
    }

    public function finaliza(Orcamento $orcamento)
    {
        throw new Exception("Esse orçamento já se encontra finalizado");
    }

}