<?php 
    include 'controller.php'; 
    require '/portal_estaca/conexao.php';  
    
     // trago a conexão com o banco e salvo ela na variavel conn
     $conexao = new Conexao();
     $conn = $conexao->conectar();

     if (!empty($_GET['id'])) {
 
         $IdVisita = $_GET['id'];
 
         $sql = "SELECT * FROM tb_visitas_presidencia WHERE id=:id";
 
         $stmt = $conn->prepare($sql);
 
         $stmt->bindValue(':id', $IdVisita, PDO::PARAM_INT);
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
                <h4>Agendar Visita</h4>
            </div>

            <div class="col-12 mt-4">
              
            <!-- Formulário de cadastro de um evento no Banco de Dados -->
            <form action="update_visita_controller.php?acao=editar" method="$_REQUEST">
                
                <?php $acao = 'editar'?>

                    <div class="col-6">
                        <label for="">ID</label>
                        <input name="id" readonly required class="form-control" type="text" value="<?=$Resultado[0]['id']?>">
                    </div>

                    <div class="col-6">
                        <label for="">Data</label>
                        <input name="data_visita" required class="form-control" type="date" value="<?=$Resultado[0]['data_visita']?>">
                    </div>
                    
                    <br/>

                    <div class="col-12">
                        <label for="">Unidade a Ser Visitada:</label>
                        <input name="titulo_visita" required class="form-control" type="text" value="<?=$Resultado[0]['titulo_visita']?>">
                    </div>

                    <br/>

                    <div class="col-10"> <!-- Botão de Submit do formulário -->
                        <button class="btn btn-primary btn-block" type="submit">Atualizar</button>
                        <a href="editar_calendario_visitas.php" class="btn btn-warning btn-block" type="submit">Voltar</a>
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