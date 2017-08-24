<?php

/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 22/08/17
 * Time: 20:53
 */
class NotaFiscal
{
    private $empresa;
    private $cnpj;
    private $itens;
    private $valorBruto;
    private $valorImpostos;
    private $observacoes;
    private $dataEmissao;

    public function __construct($empresa, $cnpj, $itens, $valorBruto, $valorImpostos, $observacoes, $dataEmissao){
        $this->empresa = $empresa;
        $this->cnpj = $cnpj;
        $this->itens = $itens;
        $this->valorBruto = $valorBruto;
        $this->valorImpostos = $valorImpostos;
        $this->observacoes = $observacoes;
        $this->dataEmissao = $dataEmissao;
    }

    /**
     * @return mixed
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * @return mixed
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @return mixed
     */
    public function getItens()
    {
        return $this->itens;
    }

    /**
     * @return mixed
     */
    public function getObservacoes()
    {
        return $this->observacoes;
    }

    /**
     * @return mixed
     */
    public function getDataEmissao()
    {
        return $this->dataEmissao;
    }

    /**
     * @return mixed
     */
    public function getValorBruto()
    {
        return $this->valorBruto;
    }

    /**
     * @return mixed
     */
    public function getValorImpostos()
    {
        return $this->valorImpostos;
    }

}