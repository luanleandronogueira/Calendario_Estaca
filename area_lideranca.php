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
              <h4 class="title"><a href="">Calendário da Estaca</a></h4>
              <p>Calendário Anual da Estaca</p>
              <p class="description"> <a class="btn btn-dark" href="editar_calendario.php" role="button">Editar</a>  </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><img width="50" height="50" src="https://img.icons8.com/ios/50/waypoint-map.png" alt="waypoint-map"/></div>
              <h4 class="title"><a href="editar_calendario_visitas.php">Calendário de Visitas</a></h4>
              <p>Calendário de Viagens e Visitas da Presidência</p>
              <p class="description"> <a class="btn btn-dark" href="editar_calendario_visitas.php" role="button">Editar</a>  </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3  mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><img width="50" height="50" src="https://img.icons8.com/ios/50/task-planning.png" alt="task-planning"/></div>
              <h4 class="title"><a href="">Agenda da Presidência <strong class="text-danger"> BREVE</strong></a></h4>
              <p>Agenda de Compromissos da Presidência</p>
              <p class="description"> <a class="btn btn-dark" href="agenda_lideranca.php" role="button">Editar</a> </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3  mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><img width="50" height="50" src="https://img.icons8.com/ios/50/spiral-bound-booklet.png" alt="spiral-bound-booklet"/></div>
              <h4 class="title"><a href="">Atas para Reunião</a></h4>
              <p>Atas para Reuniões</p>
              <p class="description"> <a class="btn btn-dark" href="ata_para_reuniao.php" role="button">Criar</a> <a class="btn btn-dark" href="ver_atas_cadastradas.php" role="button">Ver Atas</a>
              </p>
              
            </div>
          </div>
         

        </div>
      </div>
    </section><!-- End Featured Services Section -->

    </main>
    
    <?php rodape()?>
</body>
</html>