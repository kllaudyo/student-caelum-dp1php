<?php

class Reprovado implements IEstado
{
    public function aplica(Orcamento $orcamento)
    {
        throw new Exception("Um orçamento reprovado não pode receber descontos");
    }

    public function aprova(Orcamento $orcamento)
    {
        throw new Exception("Um orçamento reprovado não pode ser aprovado");
    }

    public function reprova(Orcamento $orcamento)
    {
        throw new Exception("Esse orçamento já se encontra reprovado");
    }

    public function finaliza(Orcamento $orcamento)
    {
        $orcamento->setEstado(new Finalizado());
    }
}