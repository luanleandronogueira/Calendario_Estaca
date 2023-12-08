<?php 
    require "/portal_estaca/visita.model.php";
    require "/portal_estaca/visita.service.php";
    require "/portal_estaca/conexao.php";

    // echo '<pre>';
    //     print_r($_GET); 
    // echo '</pre>';

    $conexao = new Conexao();
    $conn = $conexao->conectar(); // Obtém a conexão PDO correta

    $acao = null;

    $acao = isset($_GET['acao']) ? $_GET['acao'] : 'editar';

    if ($acao == 'editar') {

        $id = $_REQUEST['id'];

        $data_visita = $_REQUEST['data_visita'];

        $titulo_visita = $_REQUEST['titulo_visita'];

        $UpDateQuery = "UPDATE tb_visitas_presidencia SET data_visita = :data_visita , titulo_visita = :titulo_visita WHERE id = :id";

        $stmt_update = $conn->prepare($UpDateQuery);

        $stmt_update->bindParam(':id', $id);
        $stmt_update->bindParam(':data_visita', $data_visita);
        $stmt_update->bindParam(':titulo_visita', $titulo_visita);

        $result_update = $stmt_update->execute();

        // if ($result_update) {
        //     echo "Registro atualizado com sucesso!";
        // } else {
        //     echo "Erro ao atualizar o registro: " . $stmt_update->errorInfo()[2];
        // }

        header('Location: editar_calendario_visitas.php?inclusao=2');
        
        
    } else if ($acao == 'recuperar') {

        print_r($acao);
    }

?>