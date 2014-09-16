<?php
require __DIR__.'/../autoload.php';

use SON\Clientes\Types\ClienteFisicaType;
use SON\Clientes\Types\ClienteJuridicaType;
use SON\Pdo\ConfigBD;
use SON\Pdo\ActionsBD;


$dados_url  = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$rota_ = explode('/',$dados_url['path'],2);
$rota = str_replace('rotas.php','',$rota_[1]);

    /* Rota para listagem de clientes */
    if($rota == "/buscaClientes") {

        $pdo = new ActionsBD( new ConfigBD());
        $dados = $pdo->selelctAll();

        print_r( $dados);

      /* Cliente pessoa fisica

       $clienteFisica1 = new ClienteFisicaType();

       $clienteFisica1->setId(1)
            ->setNome('Guilherme Ferreira')
            ->setCpf('000.000.000-01')
            ->setEndereco('Rua A')
            ->setCidade('Montes Claros')
            ->setTipoCliente('Pessoa Fisica')
            ->setClassificacaoCliente(2);

       $cliente [0]= array(
            'id'            => $clienteFisica1->getId(),
            'nome'          => $clienteFisica1->getNome(),
            'cpf'           => $clienteFisica1->getCpf(),
            'endereco'      => $clienteFisica1->getEndereco(),
            'cidade'        => $clienteFisica1->getCidade(),
            'tipo_cliente'  => $clienteFisica1->getTipoCliente(),
            'classificacao' => $clienteFisica1->getClassificacaoCliente()
        );

        $clienteFisica2 = new ClienteFisicaType();

        $clienteFisica2->setId(2)
            ->setNome('Antonio Soares')
            ->setCpf('000.000.000-02')
            ->setEndereco('Rua C')
            ->setCidade('Montes Claros')
            ->setTipoCliente('Pessoa Fisica')
            ->setClassificacaoCliente(4);

        Cliente pessoa juridica
        $clienteJuridica1 = new ClienteJuridicaType();

        $clienteJuridica1->setId(3)
            ->setNome('Jacquline Soares')
            ->setCnpj('00.0000/0000-01')
            ->setEndereco('Rua D')
            ->setCidade('Juramento')
            ->setTipoCliente('Pessoa Juridica')
            ->setClassificacaoCliente(5);



        $cliente [0]= array(
            'id'            => $clienteFisica1->getId(),
            'nome'          => $clienteFisica1->getNome(),
            'documento'           => $clienteFisica1->getCpf(),
            'endereco'      => $clienteFisica1->getEndereco(),
            'cidade'        => $clienteFisica1->getCidade(),
            'tipo_cliente'  => $clienteFisica1->getTipoCliente(),
            'classificacao' => $clienteFisica1->getClassificacaoCliente()
        );

        $cliente [1]= array(
            'id'            => $clienteFisica2->getId(),
            'nome'          => $clienteFisica2->getNome(),
            'documento'           => $clienteFisica2->getCpf(),
            'endereco'      => $clienteFisica2->getEndereco(),
            'cidade'        => $clienteFisica2->getCidade(),
            'tipo_cliente'  => $clienteFisica2->getTipoCliente(),
            'classificacao' => $clienteFisica2->getClassificacaoCliente()
        );

        $cliente [2]= array(
            'id'            => $clienteJuridica1->getId(),
            'nome'          => $clienteJuridica1->getNome(),
            'documento'          => $clienteJuridica1->getCnpj(),
            'endereco'      => $clienteJuridica1->getEndereco(),
            'cidade'        => $clienteJuridica1->getCidade(),
            'tipo_cliente'  => $clienteJuridica1->getTipoCliente(),
            'classificacao' => $clienteJuridica1->getClassificacaoCliente()
        );




        echo json_encode($cliente);*/

    }