<?php 

    include 'compromisso.model.php';
    include 'compromisso.service.php';
    include 'conexao.php';

    $getCompromisso = $_REQUEST;

    

   if ($getCompromisso["sujeito_compromisso"] == '' || $getCompromisso["data_compromisso"] == '' || $getCompromisso["titulo_compromisso"] == '') {

    header('Location: ../inserir_compromisso_agenda.php?inclusao=1');
    

   } else {

        // instancia para criação recebimento dos conteudos via REQUEST
        $compromisso = new Compromisso();

        $compromisso->__set('sujeito_compromisso' , $getCompromisso["sujeito_compromisso"]);
        $compromisso->__set('data_compromisso' , $getCompromisso["data_compromisso"]);
        $compromisso->__set('titulo_compromisso' , $getCompromisso["titulo_compromisso"]);
        $compromisso->__set('detalhe_compromisso' , $getCompromisso["detalhe_compromisso"]);

        // instancia de conexão para inserir os dados no banco de dados
        $conn = new Conexao();

        $CompromissoService = new CompromissoService($conn, $compromisso->sujeito_compromisso, $compromisso->data_compromisso, $compromisso->titulo_compromisso, $compromisso->detalhe_compromisso);

        $CompromissoService->inserir_Compromisso();

        header('Location: ../inserir_compromisso_agenda.php?inclusao=2');

   }

?>