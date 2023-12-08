<?php

use PgSql\Result;

    include 'controller.php';
    require 'recuperar.php';

    // trago a conexão com o banco e salvo ela na variavel conn
    $conn = $conexao->conectar();

    if (!empty($_GET['id'])) {

        $IdEvento = $_GET['id'];

        $sql = "SELECT * FROM tb_evento_calendario WHERE id=:id";

        $stmt = $conn->prepare($sql);

        $stmt->bindValue(':id', $IdEvento, PDO::PARAM_INT);
        $stmt->execute();

        $Resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        // Para Debugar caso necessário
        // print_r($Resultado);

        // echo $IdEvento;

    }   

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php scripts_inicializacao()?>
</head>

<body>

<main>
    <!-- Barra inicial -->
    <?php menu_inicial_1()?>

    <!-- Navbar inicial 2  -->
    <?php menu_inicial_2()?>

   
    <div class="container">
        <div class="row">

            <div class="mt-4">
                <h4>Criação de Eventos</h4>
            </div>

            <div class="col-12 mt-4">
              
            <!-- Formulário de cadastro de um evento no Banco de Dados -->
            <form action="update_controller.php?acao=atualizar" method="$_REQUEST">
                
                <?php $acao = 'atualizar';?>


                <div class="col-1">
                    <label for="">ID</label>
                   <input type="text" readonly class="form-control" name="id" value="<?=$Resultado[0]['id']?>">
                </div>

                <br/>

                <div class="col-6">
                        <label for="">Data</label>
                        <input name="data_evento" class="form-control" value="<?= $Resultado[0]['data_evento'] ?>" type="date">
                </div>
                    
                    <br/>

                    <div class="col-6">
                        <label for="">Título do Evento:</label>
                        <input name="titulo_evento" class="form-control" value="<?= $Resultado[0]['titulo_evento'] ?>" type="text">
                    </div>

                    <br/>

                    <div class="col-10">
                    <label for="">Detalhes do Evento:</label>
                        <textarea class="form-control" name="detalha_evento"  id="" cols="100" rows="5"><?= $Resultado[0]['detalha_evento'] ?? '' ?></textarea>
                    </div>

                    <br/>

                    <div class="col-10"> <!-- Botão de Submit do formulário -->
                        <button class="btn btn-primary btn-block" type="submit">Cadastrar</button>
                        <a role="button" href="editar_calendario.php" class="btn btn-warning btn-block">Voltar</a>
                    </div>

              </form>  
              <!-- Fim do Form de envio -->  

            </div>
        </div>
    </div>






</main>
    
    <?php rodape()?>
</body>
</html>