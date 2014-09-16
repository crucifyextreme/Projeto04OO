<?php

namespace SON\Clientes\Interfaces;


interface ClienteInterface
{

    public function getNome();
    public function getTelefone();
    public function getEndereco();
    public function getCidade();
    public function getClassificacaoCliente();

}