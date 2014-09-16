<?php

namespace SON\Clientes;


use SON\Clientes\Interfaces\ClienteInterface;

class ClienteGenerica implements ClienteInterface
{

    private $id, $nome, $telefone, $endereco, $cidade, $tipoCliente, $classificacaoCliente;

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
        return $this;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
        return $this;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function setTipoCliente($tipoCliente)
    {
        $this->tipoCliente = $tipoCliente;
        return $this;
    }

    public function getTipoCliente()
    {
        return $this->tipoCliente;
    }

    public function setClassificacaoCliente($classificacaoCliente)
    {
        $this->classificacaoCliente = $classificacaoCliente;
        return $this;
    }

    public function getClassificacaoCliente()
    {
        return $this->classificacaoCliente;
    }

    public function toArray()
    {
        return get_object_vars($this);
    }



} 