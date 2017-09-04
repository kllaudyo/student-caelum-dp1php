<?php

/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 22/08/17
 * Time: 21:15
 */
class NotaFiscalBuilder
{
    private $empresa;
    private $cnpj;
    private $itens;
    private $valorBruto;
    private $valorImpostos;
    private $observacoes;
    private $dataEmissao;

    private $acoesAoGerar;

    function __construct()
    {
        $this->valorBruto = 0;
        $this->valorImpostos = 0;
        $this->itens = array();
        $this->dataEmissao = date("Y-m-d h:i:s");
        $this->acoesAoGerar = array();
    }

    public function addAcao(AcoesAoGerarNota $acao){
        array_push($this->acoesAoGerar, $acao);
        return $this;
    }

    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;
        return $this;
    }

    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
        return $this;
    }

    public function addItem(ItemDaNota $item){
        array_push($this->itens, $item);
        $this->valorBruto += $item->getValor();
        $this->valorImpostos += $item->getValor() * 0.05;
        return $this;
    }

    public function setObservacoes($observacoes)
    {
        $this->observacoes = $observacoes;
        return $this;
    }

    public function naData($data = null)
    {
        $this->dataEmissao = $data;
        return $this;
    }

    public function build(){
        $nf = new NotaFiscal($this->empresa, $this->cnpj, $this->itens, $this->valorBruto, $this->valorImpostos, $this->observacoes, $this->dataEmissao);

        foreach ($this->acoesAoGerar as $acao){
            $acao->executar($nf);
        }

        return $nf;
    }

}