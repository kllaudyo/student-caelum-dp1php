<?php

/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 08/08/17
 * Time: 20:03
 */
class DescontoPorVendaCasada implements Desconto
{
    private $proximoDesconto;

    public function desconto(Orcamento $orcamento)
    {
        if($this->existe($orcamento, "CANETA") && $this->existe($orcamento, "LAPIS")){
            return $orcamento->getValor() * 0.05;
        }else{
            return $this->proximoDesconto->desconto($orcamento);
        }
    }

    public function setProximoDesconto(Desconto $desconto)
    {
        $this->proximoDesconto = $desconto;
    }

    private function existe(Orcamento $orcamento, $nomeDoItem){
        foreach ($orcamento->getItens() as $item){
            if($item->getNome() === $nomeDoItem)
                return true;
        }
        return false;
    }

}