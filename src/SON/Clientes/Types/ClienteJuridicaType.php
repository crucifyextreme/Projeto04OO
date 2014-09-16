<?php

namespace SON\Clientes\Types;

use SON\Clientes\ClienteGenerica;

class ClienteJuridicaType extends ClienteGenerica {

    private $cnpj;

    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
        return $this;
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }

}