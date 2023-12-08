<?php 

require "visita.model.php";
require "visita.service.php";
require "conexao.php";



$conexao = new Conexao();
$conn = $conexao->conectar(); // Obtém a conexão PDO correta

$acao = $_GET['id'];

   $query = "DELETE FROM tb_visitas_presidencia WHERE id = :id";
   $stmt = $conn->prepare($query);
   $stmt->bindValue(':id', $acao);
   $stmt->execute();


   header('Location: editar_calendario_visitas.php?inclusao=3');

?>