<?php

/*
 * é um Estado
 * responsavel por aplicar um desconto
 */
class Aprovado implements IEstado
{
    private $descontoAplicado = false;
    public function aplica(Orcamento $orcamento)
    {
        if(!$this->descontoAplicado) {
            $orcamento->setValor($orcamento->getValor() - $orcamento->getValor() * 0.05);
            $this->descontoAplicado = true;
        }else{
            throw new Exception("Desconto para aprovados já aplicado");
        }
    }

    public function aprova(Orcamento $orcamento)
    {
        throw new Exception("Este orçamento já se encontra aprovado");
    }

    public function reprova(Orcamento $orcamento)
    {
        throw new Exception("Um orçamento aprovado não pode ser reprovado");
    }

    public function finaliza(Orcamento $orcamento)
    {
        $orcamento->setEstado(new Finalizado());
    }


}