<?php

require __DIR__.'/../autoload.php';

use SON\Pdo\ConfigBD;
use SON\Pdo\ActionsBD;
use SON\Clientes\Types\ClienteFisicaType;
use SON\Clientes\Types\ClienteJuridicaType;

$pdo = new ConfigBD();


$stmt = $pdo->ConnectionBD();



echo "######## Removendo Tabela ########## \n";

$stmt->query("DROP TABLE IF EXISTS clientes");

echo "######## Criando Tabela ############ \n";

$stmt->query("CREATE TABLE clientes (
  id_cliente INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(150) NULL,
  documento VARCHAR(50) NULL,
  endereco VARCHAR(180) NULL,
  cidade VARCHAR(150) NULL,
  tipo_cliente VARCHAR(50) NULL,
  classificacao INT NULL,
  PRIMARY KEY (id_cliente));");

echo "######## Tabela Criada com Sucesso ######## \n";


echo "######## Inserindo Dados ######## \n";



$clienteFisica1 = new ClienteFisicaType();
$clienteFisica1->setNome('Guilherme Ferreira')
        ->setCpf('000.000.000-01')
        ->setEndereco('Rua A')
        ->setCidade('Montes Claros')
        ->setTipoCliente('Pessoa Fisica')
        ->setClassificacaoCliente(3);

$clienteFisica2 = new ClienteFisicaType();
$clienteFisica2->setNome('Antonio Lopes')
        ->setCpf('000.000.000-02')
        ->setEndereco('Rua B')
        ->setCidade('Juramento')
        ->setTipoCliente('Pessoa Fisica')
        ->setClassificacaoCliente(4);

$clienteJuridica1 = new ClienteJuridicaType();
$clienteJuridica1->setNome('Banco Santander')
        ->setCnpj('00.090.090\0001-99')
        ->setEndereco('Rua C')
        ->setCidade('Carmelo')
        ->setTipoCliente('Pessoa Juridica')
        ->setClassificacaoCliente(3);


$bd = new ActionsBD(new ConfigBD());


$bd->persist($clienteFisica1);
$bd->flush();

$bd->persist($clienteFisica2);
$bd->flush();

$bd->persist($clienteJuridica1);
$bd->flush();




