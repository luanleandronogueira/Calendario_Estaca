<?php 
    include 'controller.php';    
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
            <form action="visita_controller.php?acao=inserir" method="$_REQUEST">
                
                <?php $acao = 'inserir';?>

                <div class="col-6">
                        <label for="">Data</label>
                        <input name="data_visita" required class="form-control" type="date">
                    </div>
                    
                    <br/>

                    <div class="col-12">
                        <label for="">Unidade a Ser Visitada:</label>
                        <input name="titulo_visita" required class="form-control" type="text">
                    </div>

                    <br/>

                    <div class="col-10"> <!-- Botão de Submit do formulário -->
                        <button class="btn btn-primary btn-block" type="submit">Agendar</button>
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