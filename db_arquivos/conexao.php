<?php 

    $dsn = 'mysql:host=localhost;dbname=db_portal_adm_estaca';

    $usuario = 'root';

    $senha = '';

    try {

        $conexao = new PDO($dsn, $usuario, $senha);


    } catch (PDOException $e) {

        echo 'Erro: ' . $e->getCode(). ' Mensagem: '. $e->getMessage();

    }

    


?>