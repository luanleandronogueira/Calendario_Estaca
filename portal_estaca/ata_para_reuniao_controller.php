<?php 

require 'ata.model.php';
require 'ata.service.php';
require "conexao.php";



if(empty($_REQUEST)) {

    header('Location: ../ata_para_reuniao.php?inclusao=1');

}

else {

    $ata = new Ata();

    $ata->__set('lider_ata', $lider_ata = $_REQUEST['lider_ata']);
    $ata->__set('dirigida_ata', $dirigida_ata = $_REQUEST['dirigida_ata']);
    $ata->__set('data_ata', $data_ata = $_REQUEST['data_ata']);
    $ata->__set('titulo_ata', $titulo_ata = $_REQUEST['titulo_ata']);
    $ata->__set('detalhe_ata', $detalhe_ata = $_REQUEST['detalhe_ata']);

    // criando conexão
    $conexao =  new Conexao();

    // cria a instancia do método que vai lançar no banco de dados
    $ataService = new AtaService($conexao, $lider_ata, $dirigida_ata, $data_ata, $titulo_ata, $detalhe_ata);

    // metodo da classe que faz a inserção no Banco de dados
    $ataService->inserirAta();

    header('Location: ../ata_para_reuniao.php?inclusao=2');


}





















?>