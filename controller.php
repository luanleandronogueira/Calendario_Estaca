<?php 

function scripts_inicializacao(){

    print'
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>Portal da Estaca Garanhuns</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
  
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">';
}




function menu_inicial_1(){
    print '<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-center">
  <div class="container d-flex justify-content-center justify-content-md-between">
    <div class="contact-info d-flex align-items-center">
      <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:estacagaranhuns@gmail.com">estacagaranhuns@gmail.com</a></i>
      <i class="bi bi-phone d-flex align-items-center ms-4"><span>(87) 99919-1069</span></i>
    </div>
    <div class="social-links d-none d-md-flex align-items-center">
      <a href="https://www.facebook.com/estacagaranhunsbrasildesiao" target="_blank" class="facebook"><i class="bi bi-facebook" ></i></a>
      <a href="https://www.instagram.com/estacagaranhuns/" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
    </div>
  </div>
</section>';

}

function menu_inicial_2(){
    print'
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
      <div class="container d-flex align-items-center justify-content-between">
  
        <h1 class="logo"><a href="index.php">Estaca <span>Garanhuns</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php" class="logo"><img src="assets/img/logo.png" alt=""></a>-->
  
        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="index.php">Inicio</a></li>
            <li><a class="nav-link scrollto" href="calendarios_da_estaca.php">Calendários</a></li>
            <li class="dropdown"><a href="#"><span>Área da Liderança</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="editar_calendario.php">Editar Calendário </a></li>
                <li><a href="editar_calendario_visitas.php">Calendário de Viagens</a></li>
                <li><a href="agenda_lideranca.php">Agenda da Presidência</a></li>
                <li><a href="area_lideranca.php">Agenda para Reuniões</a></li>
              </ul>
            </li>
            <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
  
      </div>
    </header><!-- End Header -->';
}

function rodapeCalendario(){


  print print'<!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Estaca<span> Garanhuns</span></h3>
            &copy; Copyright <strong><span>Estaca Garanhuns</span></strong>. Todos os direitos
            
            <span class="credits">
              Designed by <a href="estacagaranhuns@gmail.com">Office Estaca Garanhuns</a>
            </div>
          </span>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        
      </div>
     
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>';
          
}

function rodape(){
    print'<!-- ======= Footer ======= -->
    <footer id="footer">
  
      <div class="footer-top">
        <div class="container">
          <div class="row">
  
            <div class="col-lg-3 col-md-6 footer-contact">
              <h3>Estaca<span> Garanhuns</span></h3>
              <p>
                R. Ernesto Dourado, 458 - Heliópolis, <br>
                Heliópolis, Garanhuns, PE<br>
                Brasil <br><br>
                <strong>Contato:</strong> +55 87 99919-1069<br>
                <strong>Email:</strong> estacagaranhuns@gmail.com <br>
              </p>
            </div>
  
            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Menu</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="calendario.php">Calendário</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="area_lideranca.php">Área da Liderança</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Calendário de Viagens</a></li>
              </ul>
            </div>

          </div>
        </div>
      </div>
  
      <div class="container py-4">
        <div class="copyright">
          &copy; Copyright <strong><span>Estaca Garanhuns</span></strong>. All Rights Reserved
        </div>
      </div>
    </footer><!-- End Footer -->
  
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
  
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>';
}


?>