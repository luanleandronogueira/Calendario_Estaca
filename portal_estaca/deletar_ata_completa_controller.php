<?php 

require "ata.model.php";
require "ata.service.php";
require "conexao.php";



$conexao = new Conexao();
$conn = $conexao->conectar(); // Obtém a conexão PDO correta

$acao = $_GET['id'];

   $query = "DELETE FROM tb_ata_reuniao WHERE id = :id";
   $stmt = $conn->prepare($query);
   $stmt->bindValue(':id', $acao);
   $stmt->execute();


   header('Location: ../ver_atas_cadastradas.php?inclusao=3');

?>