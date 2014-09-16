<?php

namespace SON\Clientes\Types;

use SON\Clientes\ClienteGenerica;

class ClienteFisicaType extends ClienteGenerica
{

    private $cpf;

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }

    public function getCpf()
    {
        return $this->cpf;
    }




} 