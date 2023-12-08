<?php 
    include 'controller.php';  
    
    $presidencia = ['PresEstaca'   => 'Presidente da Estaca', 
                    '1Conselheiro' => '1º Conselheiro', 
                    '2Conselheiro' => '2º Conselheiro ', 
                    'SecExecutivo' => 'Secretário Executivo', 
                    'SecEstaca'    => 'Secretário da Estaca'
                    ];
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

    <?php if (isset($_GET['inclusao']) && $_GET['inclusao'] == 3) { ?>

      <div class="bg-success pt-2 text-white d-flex justify-content-center">
          <h5>Compromisso Realizado com Sucesso!</h5>
      </div>
       
      <?php } ?>

   
    <div class="container">
        <div class="row">

            <div class="mt-4">
                <h4>Agenda da Presidência
                </h4>
            </div>

            <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">


        <?php 
          foreach ($presidencia as $i => $lideres) { ?>

          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <!-- <div class="icon"><img width="50" height="50" src="https://img.icons8.com/ios/50/waypoint-map.png" alt="waypoint-map"/></div> -->
              <h4 class="title"><a href="calendario_viagens.php">Agenda do <?= $lideres ?></a></h4>
              <p>Agenda de compromissos do <?= $lideres ?></p>
              <p class="description"> <a class="btn btn-dark" href="agenda_compromissos.php?value=<?= $i?>" role="button">Ver</a>  </p>
            </div>
          </div>

         <?php } ?>         
         
        </div>
      </div>
    </section><!-- End Featured Services Section -->

            
        </div>
    </div>






</main>
    
    <?php rodape()?>
</body>
</html>