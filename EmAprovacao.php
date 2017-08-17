<?php

class EmAprovacao implements IEstado
{
    private $descontoAplicado = false;
    public function aplica(Orcamento $orcamento)
    {
        if(!$this->descontoAplicado) {
            $orcamento->setValor($orcamento->getValor() - $orcamento->getValor() * 0.02);
            $this->descontoAplicado = false;
        }else{
            throw new Exception("Desconto em aprovação já aplicado");
        }
    }

    public function aprova(Orcamento $orcamento)
    {
        $orcamento->setEstado(new Aprovado());
    }

    public function reprova(Orcamento $orcamento)
    {
        $orcamento->setEstado(new Reprovado());
    }

    public function finaliza(Orcamento $orcamento)
    {
        throw new Exception("Apenas orçamentos aprovados podem ser finalizados");
    }

}