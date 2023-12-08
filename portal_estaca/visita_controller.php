<?php 

    require "visita.model.php";
    require "visita.service.php";
    require "conexao.php";

    // echo "<pre>";
    //     print_r($_REQUEST);
    // echo "</pre>";


    $acao = $_REQUEST;

    $visita = new Visita();

    $visita->__set('data_visita', $_REQUEST['data_visita']);

    $visita->__set('titulo_visita', $_REQUEST['titulo_visita']);

    $conexao = new Conexao();

    $VisitaService = new VisitaService($conexao, $visita->data_visita, $visita->titulo_visita);

    
    $VisitaService->Inserir_Visita();

 

?>