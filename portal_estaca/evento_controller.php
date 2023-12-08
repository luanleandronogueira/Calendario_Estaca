<?php 

    require "evento.model.php";
    require "evento.service.php";
    require "conexao.php";
    
    // 
    
    // echo '<pre>';
    //     print_r($_REQUEST);
    // echo '</pre>'
    $acao = null;

    $acao = isset($_GET['acao']) ? $_GET['acao'] : 'inserir';

    if ( $acao == 'inserir') {

        // instancia para criação recebimento dos conteudos via REQUEST
        $evento = new Evento();

        $evento->__set('data_evento', $_REQUEST['data_evento']);

        $evento->__set('titulo_evento', $_REQUEST['titulo_evento']);

        $evento->__set('detalha_evento', $_REQUEST['detalha_evento']);

        
        // instancia de conexão para inserir os dados no banco de dados 
        $conexao = new Conexao();


        // instacia que vai utilizar para inserir, apagar e ler os dados do banco de dados
        $eventoService = new EventoService($conexao, $evento->data_evento,$evento->titulo_evento, $evento->detalha_evento);
        $eventoService->inserir();

        header('Location: editar_calendario.php?inclusao=1');

    } 
    
    else if ($acao == 'recuperar') {

        echo 'Chegamos até aqui!';

    }
  

?>