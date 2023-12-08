<?php 

include "conexao.php";

$conexao = new Conexao();

$conn = $conexao->conectar();

$Id = $_GET['id'];

print_r($Id);


$query = "DELETE FROM tb_agenda_compromisso WHERE id = :id";
$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $Id, PDO::PARAM_INT);
// Correção: Use execute() para executar a consulta

$stmt->execute();
header('Location: ../agenda_lideranca.php?inclusao=3');


?>