<?php 
    include 'controller.php';
    
    require 'recuperar.php';

    // echo '<pre>';
    //     print_r($eventos);
    // echo '</pre>';

    $meses = array(
        "01" => 'Janeiro',
        "02" => 'Fevereiro',
        "03" => 'Março',
        "04" => 'Abril',
        "05" => 'Maio',
        "06" => 'Junho',
        "07" => 'Julho',
        "08" => 'Agosto',
        "09" => 'Setembro',
        "10" => 'Outubro',
        "11" => 'Novembro',
        "12" => 'Dezembro'
    );

    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php scripts_inicializacao()?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>

<body>

<main>
    <!-- Barra inicial -->
    <?php menu_inicial_1()?>

    <!-- Navbar inicial 2  -->
    <?php menu_inicial_2()?>



    <!-- inclusão do aviso de enviado o evento com sucesso -->
    <?php if( isset($_GET['inclusao']) && $_GET['inclusao'] == 1 ) { ?> 

        <div class="bg-primary pt-2 text-white d-flex justify-content-center">
            <h5>Evento Cadastrado com Sucesso!</h5>
        </div>

    <?php } ?> 

   
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="section-title">
          <h3>Calendário da<span> Estaca <?= date('Y')?></span></h3>
          <p>Criação e Edição do Calendário</p>
        </div>
    </section><!-- End Services Section -->

    


    <div class="container">
        <div class="row">
            <div>
                <a href="inserir_evento.php" role="button" class="btn btn-primary"><img width="15" height="15" src="https://img.icons8.com/ios/50/edit-property.png" alt="edit-property"/> Criar Mês de Eventos</a>
            </div>
                
        </div>
    </div>


    <section>
        <div class="container">
          <div class="row">

             <!--Card para loop while -->
            <?php foreach ($meses as $i => $mes ) { ?>     
                <div class="col-sm-6 p-1">
                        <div class="card">
                            <div class="card-body ">
                                <h5 class="card-title"><?= $mes ?></h5>
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Data</th>
                                        <th scope="col">Evento</th>
                                        <th scope="col"></th>
                                        </tr>
                                    </thead>
                                        <tbody>
                                        <th scope="row"></th>
                                                <td><strong> </strong></td>
                                                <td><p class="card-text"> </p></td>
                                                <td>
                                                    <?php 
                                                    
                                                    
                                                    
                                                    
                                                    ?>
                                                    <!-- Opções de Edição -->
                                                    <i class="fas fa-trash-alt fa-lg text-danger"></i>|
                                                    <a href="editar_evento.php?id=<?= $evento->id ?>">
													<i class="fas fa-edit fa-lg text-secondary"></i></a> | 
                                                    <a href="">Detalhar</a>
                                                </td>
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>
                <?php  }?>
         </div>
    </section>

    </main>
    
    <?php rodape()?>
    </body>
</html>