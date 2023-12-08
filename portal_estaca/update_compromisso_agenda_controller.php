<?php 

require "conexao.php";

$conexao = new Conexao();

$conn = $conexao->conectar();


$id = $_REQUEST['id'];

$sujeito_compromisso = $_REQUEST['sujeito_compromisso'];

$data_compromisso = $_REQUEST['data_compromisso'];

$titulo_compromisso = $_REQUEST['titulo_compromisso'];

$detalhe_compromisso = $_REQUEST['detalhe_compromisso'];


$query = "UPDATE tb_agenda_compromisso SET sujeito_compromisso = :sujeito_compromisso, data_compromisso = :data_compromisso, titulo_compromisso = :titulo_compromisso, detalhe_compromisso = :detalhe_compromisso WHERE id = :id";

$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $id);
$stmt->bindParam(':sujeito_compromisso', $sujeito_compromisso);
$stmt->bindParam(':data_compromisso', $data_compromisso);
$stmt->bindParam(':titulo_compromisso', $titulo_compromisso);
$stmt->bindParam(':detalhe_compromisso', $detalhe_compromisso);
$stmt->execute();


header("Location: ../agenda_lideranca.php?inclusao=2");






