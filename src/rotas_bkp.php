<?php


$dados_url  = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$rota = explode('/',$dados_url['path'],2);
$rotaFinal = str_replace('rotas.php','',$rota[1]);

/* Inclui a classe Clientes */
require_once('../src/ClienteFisicaType.php');
require_once('../src/ClienteJuridicaType.php');
require_once('../src/ClienteInterface.php');


if( $rotaFinal == "/clientes") {


    //echo $cliente->consulta();
    /* Cliente Fisica */
    $clienteFisica1 = new ClienteFisica();
    $clienteFisica1->setId(1)
                ->setNome('Guilherme Ferreira')
                ->setCpf('000.000.000-01')
                ->setEndereco('Rua A')
                ->setCidade('Montes Claros')
                ->setTipoCliente('Pessoa Fisica')
                ->setClassificacao(2);

    $clienteFisica2 = new ClienteFisica();
    $clienteFisica2->setId(3)
                ->setNome('Luiz Silverio')
                ->setCpf('000.000.000-02')
                ->setEndereco('Rua B')
                ->setCidade('Juramento')
                ->setTipoCliente('Pessoa Fisica')
                ->setClassificacao(3);

    $clienteFisica3 = new ClienteFisica();
    $clienteFisica3->setId(4)
                ->setNome('Lucas Silva')
                ->setCpf('000.000.000-03')
                ->setEndereco('Rua D')
                ->setCidade('Janaúba')
                ->setTipoCliente('Pessoa Fisica')
                ->setClassificacao(1);

    $clienteFisica4 = new ClienteFisica();
    $clienteFisica4->setId(5)
                ->setNome('Luciana Silva')
                ->setCpf('000.000.000-04')
                ->setEndereco('Rua E')
                ->setCidade('Porteirinha')
                ->setTipoCliente('Pessoa Fisica')
                ->setClassificacao(5);

    $clienteFisica5 = new ClienteFisica();
    $clienteFisica5->setId(6)
                ->setNome('Total Seguros')
                ->setCpf('000.000.000-05')
                ->setEndereco('Rua F')
                ->setCidade('Campos')
                ->setTipoCliente('Pessoa Fisica')
                ->setClassificacao(4);




    /* Cliente Juridica */
    $clienteJuridica1 = new ClienteJuridica();
    $clienteJuridica1->setId(2)
                ->setNome('California Videos')
                ->setCnpj('00.000.000/0001-01')
                ->setEndereco('Rua F')
                ->setCidade('Montes Claros')
                ->setTipoCliente('Pessoa Juridica')
                ->setClassificacao(3)
                ->setEnderecoCobranca('Rua Patis')
                ->setCidadeCobranca('Montes Claros');

    $clienteJuridica2 = new ClienteJuridica();
    $clienteJuridica2->setId(7)
                ->setNome('Master Imóveis')
                ->setCnpj('00.000.000/0002-01')
                ->setEndereco('Rua JK')
                ->setCidade('Montes Claros')
                ->setTipoCliente('Pessoa Juridica')
                ->setClassificacao(4)
                ->setEnderecoCobranca('Rua Juca Andrade')
                ->setCidadeCobranca('Porteirinha');

    $clienteJuridica3 = new ClienteJuridica();
    $clienteJuridica3->setId(8)
                ->setNome('Fiel Creditos')
                ->setCnpj('00.000.000/0003-01')
                ->setEndereco('Rua Foz')
                ->setCidade('Marília')
                ->setTipoCliente('Pessoa Juridica')
                ->setClassificacao(2);

    $clienteJuridica4 = new ClienteJuridica();
    $clienteJuridica4->setId(9)
                ->setNome('Minas Notebook')
                ->setCnpj('00.000.000/0004-01')
                ->setEndereco('Rua Antonio Figueiredo')
                ->setCidade('Marília')
                ->setTipoCliente('Pessoa Juridica')
                ->setClassificacao(1);

    $clienteJuridica5 = new ClienteJuridica();
    $clienteJuridica5->setId(10)
                ->setNome('Mercearia do Zé')
                ->setCnpj('00.000.000/0005-01')
                ->setEndereco('Rua Antonio Lopes')
                ->setCidade('São Paulo')
                ->setTipoCliente('Pessoa Juridica')
                ->setClassificacao(5);





    $cliente [0]= array(
        'id'            => $clienteFisica1->getId(),
        'nome'          => $clienteFisica1->getNome(),
        'cpf'           => $clienteFisica1->getCpf(),
        'endereco'      => $clienteFisica1->getEndereco(),
        'cidade'        => $clienteFisica1->getCidade(),
        'tipo_cliente'  => $clienteFisica1->getTipoCliente(),
        'classificacao' => $clienteFisica1->getClassificacao()
    );
    $cliente [1]= array(
        'id'            => $clienteJuridica1->getId(),
        'nome'          => $clienteJuridica1->getNome(),
        'cpf'           => $clienteJuridica1->getCnpj(),
        'endereco'      => $clienteJuridica1->getEndereco(),
        'cidade'        => $clienteJuridica1->getCidade(),
        'tipo_cliente'  => $clienteJuridica1->getTipoCliente(),
        'classificacao' => $clienteJuridica1->getClassificacao(),
        'endereco_cob'  => $clienteJuridica1->getEnderecoCobranca(),
        'cidade_cob'    => $clienteJuridica1->getCidadeCobranca()
    );
    $cliente [2]= array(
        'id'            => $clienteFisica2->getId(),
        'nome'          => $clienteFisica2->getNome(),
        'cpf'           => $clienteFisica2->getCpf(),
        'endereco'      => $clienteFisica2->getEndereco(),
        'cidade'        => $clienteFisica2->getCidade(),
        'tipo_cliente'  => $clienteFisica2->getTipoCliente(),
        'classificacao' => $clienteFisica2->getClassificacao()
    );
    $cliente [3]= array(
        'id'            => $clienteFisica3->getId(),
        'nome'          => $clienteFisica3->getNome(),
        'cpf'           => $clienteFisica3->getCpf(),
        'endereco'      => $clienteFisica3->getEndereco(),
        'cidade'        => $clienteFisica3->getCidade(),
        'tipo_cliente'  => $clienteFisica3->getTipoCliente(),
        'classificacao' => $clienteFisica3->getClassificacao()
    );
    $cliente [4]= array(
        'id'            => $clienteFisica4->getId(),
        'nome'          => $clienteFisica4->getNome(),
        'cpf'           => $clienteFisica4->getCpf(),
        'endereco'      => $clienteFisica4->getEndereco(),
        'cidade'        => $clienteFisica4->getCidade(),
        'tipo_cliente'  => $clienteFisica4->getTipoCliente(),
        'classificacao' => $clienteFisica4->getClassificacao()
    );
    $cliente [5]= array(
        'id'            => $clienteFisica5->getId(),
        'nome'          => $clienteFisica5->getNome(),
        'cpf'           => $clienteFisica5->getCpf(),
        'endereco'      => $clienteFisica5->getEndereco(),
        'cidade'        => $clienteFisica5->getCidade(),
        'tipo_cliente'  => $clienteFisica5->getTipoCliente(),
        'classificacao' => $clienteFisica5->getClassificacao()
    );

    $cliente [6]= array(
        'id'            => $clienteJuridica2->getId(),
        'nome'          => $clienteJuridica2->getNome(),
        'cpf'           => $clienteJuridica2->getCnpj(),
        'endereco'      => $clienteJuridica2->getEndereco(),
        'cidade'        => $clienteJuridica2->getCidade(),
        'tipo_cliente'  => $clienteJuridica2->getTipoCliente(),
        'classificacao' => $clienteJuridica2->getClassificacao(),
        'endereco_cob'  => $clienteJuridica1->getEnderecoCobranca(),
        'cidade_cob'    => $clienteJuridica1->getCidadeCobranca()
    );
    $cliente [7]= array(
        'id'            => $clienteJuridica3->getId(),
        'nome'          => $clienteJuridica3->getNome(),
        'cpf'           => $clienteJuridica3->getCnpj(),
        'endereco'      => $clienteJuridica3->getEndereco(),
        'cidade'        => $clienteJuridica3->getCidade(),
        'tipo_cliente'  => $clienteJuridica3->getTipoCliente(),
        'classificacao' => $clienteJuridica3->getClassificacao(),
    );
    $cliente [8]= array(
        'id'            => $clienteJuridica4->getId(),
        'nome'          => $clienteJuridica4->getNome(),
        'cpf'           => $clienteJuridica4->getCnpj(),
        'endereco'      => $clienteJuridica4->getEndereco(),
        'cidade'        => $clienteJuridica4->getCidade(),
        'tipo_cliente'  => $clienteJuridica4->getTipoCliente(),
        'classificacao' => $clienteJuridica4->getClassificacao()
    );
    $cliente [9]= array(
        'id'            => $clienteJuridica5->getId(),
        'nome'          => $clienteJuridica5->getNome(),
        'cpf'           => $clienteJuridica5->getCnpj(),
        'endereco'      => $clienteJuridica5->getEndereco(),
        'cidade'        => $clienteJuridica5->getCidade(),
        'tipo_cliente'  => $clienteJuridica5->getTipoCliente(),
        'classificacao' => $clienteJuridica5->getClassificacao()
    );

    echo json_encode($cliente);


}
