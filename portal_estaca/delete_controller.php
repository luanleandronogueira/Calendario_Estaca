<?php 

require "evento.model.php";
require "evento.service.php";
require "conexao.php";



$conexao = new Conexao();
$conn = $conexao->conectar(); // Obtém a conexão PDO correta

$acao = $_GET['id'];

   $query = "DELETE FROM tb_evento_calendario WHERE id = :id";
   $stmt = $conn->prepare($query);
   $stmt->bindValue(':id', $acao);
   $stmt->execute();


   header('Location: editar_calendario.php?inclusao=3');

?>


