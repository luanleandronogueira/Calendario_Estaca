<?php 

require 'conexao.php';

$conexao = new Conexao();
$conn = $conexao->conectar(); // Obtém a conexão PDO correta
    

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
 

        $id = $_REQUEST['id'];

        $lider_ata = $_REQUEST['lider_ata'];

        $dirigida_ata = $_REQUEST['dirigida_ata'];

        $titulo_ata = $_REQUEST['titulo_ata'];

        $data_ata = $_REQUEST['data_ata'];

        $detalhe_ata = $_REQUEST['detalhe_ata'];

        $UpDateQuery = "UPDATE tb_ata_reuniao SET lider_ata = :lider_ata , dirigida_ata = :dirigida_ata,  titulo_ata = :titulo_ata, data_ata = :data_ata, detalhe_ata = :detalhe_ata  WHERE id = :id";

        $stmt_update = $conn->prepare($UpDateQuery);

        $stmt_update->bindParam(':id', $id);
        $stmt_update->bindParam(':lider_ata', $lider_ata);
        $stmt_update->bindParam(':dirigida_ata', $dirigida_ata);
        $stmt_update->bindParam(':titulo_ata', $titulo_ata);
        $stmt_update->bindParam(':data_ata', $data_ata);
        $stmt_update->bindParam(':detalhe_ata', $detalhe_ata);

        $result_update = $stmt_update->execute();

        // if ($result_update) {
        //     echo "Registro atualizado com sucesso!";
        // } else {
        //     echo "Erro ao atualizar o registro: " . $stmt_update->errorInfo()[2];
        // }

       header('Location: ../ver_atas_cadastradas.php?inclusao=2');

        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

    } else {
        header('Location: ../ver_atas_cadastradas.php'); 
    }
   








?>