<?php

namespace SON\Pdo;
use SON\Pdo\ConfigBD;
use SON\Clientes\ClienteGenerica;
use SON\Clientes\Types;

class ActionsBD {

    public $db;

    public function __construct(ConfigBD $dataBade)
    {
        $this->db = $dataBade->ConnectionBD();
    }

    public function persist($cliente)
    {
        $this->db->beginTransaction();

        if($cliente instanceof Types\ClienteFisicaType) {

            try {

                $stmt = $this->db->prepare("INSERT INTO clientes (nome, documento, endereco, cidade, tipo_cliente, classificacao) VALUES (?, ?, ?, ?, ?, ?)");
                $stmt->bindValue(1, $cliente->getNome());
                $stmt->bindValue(2, $cliente->getCpf());
                $stmt->bindValue(3, $cliente->getEndereco());
                $stmt->bindValue(4, $cliente->getCidade());
                $stmt->bindValue(5, $cliente->getTipoCliente());
                $stmt->bindValue(6, $cliente->getClassificacaoCliente());
                $stmt->execute();

            } catch(\PDOException $e) {
                echo $e->getMessage();
            }

        } elseif($cliente instanceof Types\ClienteJuridicaType) {

            try {

                $stmt = $this->db->prepare("INSERT INTO clientes (nome, documento, endereco, cidade, tipo_cliente, classificacao) VALUES (?, ?, ?, ?, ?, ?)");
                $stmt->bindValue(1, $cliente->getNome());
                $stmt->bindValue(2, $cliente->getCnpj());
                $stmt->bindValue(3, $cliente->getEndereco());
                $stmt->bindValue(4, $cliente->getCidade());
                $stmt->bindValue(5, $cliente->getTipoCliente());
                $stmt->bindValue(6, $cliente->getClassificacaoCliente());
                $stmt->execute();

            } catch(\PDOException $e) {
                echo $e->getMessage();
            }
        }
    }

    public function selelctAll()
    {
        $stmt = $this->db->query('SELECT * FROM clientes');
        $stmt->execute();

        return json_encode($stmt->fetchAll(\PDO::FETCH_ASSOC));
    }


    public function flush()
    {
        try {
            $this->db->commit();
        } catch (\PDOException $e) {
            $this->db->rollBack();
            die("Erro: " . $e->getMessage());
        }

        return true;
    }

}