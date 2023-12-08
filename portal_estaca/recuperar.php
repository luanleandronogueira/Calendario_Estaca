<?php 
    require 'evento.model.php';
    require 'conexao.php';
    require 'evento.service.php';
    

    $evento = new Evento();

    $conexao = new Conexao();

    $eventoService = new EventoService($conexao, $evento->data_evento,$evento->titulo_evento, $evento->detalha_evento);

    $eventos = $eventoService->recuperar();



?>