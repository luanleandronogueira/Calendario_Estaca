<?php 

include 'conexao.php';

$conexao = new Conexao();

$conn = $conexao->conectar();


// query para trazer os compromissos
 $query_compromissos = 'SELECT id, sujeito_compromisso, data_compromisso, titulo_compromisso, detalhe_compromisso FROM tb_agenda_compromisso';

 $resultado_compromissos = $conn->prepare($query_compromissos);

 $resultado_compromissos->execute();

 $compromissos = [];

 while ($linha = $resultado_compromissos->fetch(PDO::FETCH_ASSOC)){

        $id = $linha['id'];
        $sujeito_compromisso = $linha['sujeito_compromisso'];
        $data_compromisso = $linha['data_compromisso'];
        $titulo_compromisso = $linha['titulo_compromisso'];
        $detalhe_compromisso = $linha['detalhe_compromisso'];

        $compromissos[] = [

          'id' => $id,
          'sujeito_compromisso' => $sujeito_compromisso,
          'data_compromisso' => $data_compromisso,
          'titulo_compromisso' => $titulo_compromisso,
          'detalhe_compromisso' => $detalhe_compromisso

        ];

 }
        echo json_encode($compromissos);



?>