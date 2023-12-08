<?php 
    require "evento.model.php";
    require "evento.service.php";
    require "conexao.php";

    // echo '<pre>';
    //     print_r($_GET); 
    // echo '</pre>';

    $conexao = new Conexao();
    $conn = $conexao->conectar(); // Obtém a conexão PDO correta

    $acao = null;

    $acao = isset($_GET['acao']) ? $_GET['acao'] : 'atualizar';

    if ($acao == 'atualizar') {

        $id = $_REQUEST['id'];

        $data_evento = $_REQUEST['data_evento'];

        $titulo_evento = $_REQUEST['titulo_evento'];

        $detalha_evento = $_REQUEST['detalha_evento'];


        $UpDateQuery = "UPDATE tb_evento_calendario SET data_evento = :data_evento , titulo_evento = :titulo_evento , detalha_evento = :detalha_evento  WHERE id = :id";

        $stmt_update = $conn->prepare($UpDateQuery);

        $stmt_update->bindParam(':id', $id);
        $stmt_update->bindParam(':data_evento', $data_evento);
        $stmt_update->bindParam(':titulo_evento', $titulo_evento);
        $stmt_update->bindParam(':detalha_evento', $detalha_evento);

        $result_update = $stmt_update->execute();

        // if ($result_update) {
        //     echo "Registro atualizado com sucesso!";
        // } else {
        //     echo "Erro ao atualizar o registro: " . $stmt_update->errorInfo()[2];
        // }

        header('Location: editar_calendario.php?inclusao=2');
        
        
    } else if ($acao == 'recuperar') {

        print_r($acao);
    }











?>