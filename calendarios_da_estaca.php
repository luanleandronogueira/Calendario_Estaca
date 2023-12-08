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

    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><img width="50" height="50" src="https://img.icons8.com/ios/50/calendar--v1.png" alt="calendar--v1"/></i></div>
              <h4 class="title"><a href="calendario.php">Calendário da Estaca</a></h4>
              <p>Calendário Anual da Estaca</p>
              <p class="description"> <a class="btn btn-dark" href="calendario.php" role="button">Ver</a>  </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><img width="50" height="50" src="https://img.icons8.com/ios/50/waypoint-map.png" alt="waypoint-map"/></div>
              <h4 class="title"><a href="calendario_viagens.php">Calendário de Visitas</a></h4>
              <p>Calendário de Viagens e Visitas da Presidência</p>
              <p class="description"> <a class="btn btn-dark" href="calendario_viagens.php" role="button">Ver</a>  </p>
            </div>
          </div>
         
        </div>
      </div>
    </section><!-- End Featured Services Section -->

    </main>
    
    <?php rodape()?>
</body>
</html>