<?php

/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 16/08/17
 * Time: 20:54
 */
interface IEstado
{
    public function aplica(Orcamento $orcamento);

    public function aprova(Orcamento $orcamento);

    public function reprova(Orcamento $orcamento);

    public function finaliza(Orcamento $orcamento);
}