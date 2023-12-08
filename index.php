<?php 

  include 'controller.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

  <?php scripts_inicializacao()?>

</head>

<body>

  <?php menu_inicial_1()?>

  <?php menu_inicial_2()?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1><span>Estaca Garanhuns</span></h1>
      <h2>Portal Administrativo da Estaca Garanhuns</h2>
      <div class="d-flex">
        <a href="calendario.php" class="btn-get-started scrollto">Visualizar Calendário</a>
        <a href="area_lideranca.php" class="btn-watch-video"><i class="bi bi-person-vcard-fill"></i><span>Liderança</span></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Liderança</h2>
          <h3>Presidência da<span> Estaca</span></h3>
          <p>A Liderança da Estaca foi formada em Maio de 2018 pelo Elder Marcus A. Aidukaitis dos Setenta.</p>
        </div>

        <div class="row ">
          <div class="d-flex justify-content-center">

            <div class="col-lg-3 col-md-6 align-items-stretch p-1" data-aos="fade-up" data-aos-delay="200">
                <div class="member">
                  <div class="member-img">
                    <!-- <img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""> -->
                    <div class="social">
                    
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Ricardo Leite de Melo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>
                    <span>1° Conselheiro</span>
                  </div>
                </div>
              </div>

            <div class="col-lg-3 col-md-6 align-items-stretch p-1" data-aos="fade-up" data-aos-delay="300">
              <div class="member">
                <div class="member-img">
                  <!-- <img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""> -->
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Marcondes Bezerra do Nascimento</h4>
                  <span>Presidente</span>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 align-items-stretch p-1" data-aos="fade-up" data-aos-delay="400">
              <div class="member">
                <div class="member-img">
                  <!-- <img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""> -->
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Joseildo Cavalcante Ferreira</h4>
                  <span>2° Conselheiro</span>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contatos</h2>
          <h3><span>Fale Conosco</span></h3>
          <!-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Nosso Endereço</h3>
              <p>R. Ernesto Dourado, 458 - Heliópolis, Garanhuns, PE, Brasil</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email </h3>
              <p>estacagaranhuns@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Contato</h3>
              <p>(87) 98845-7530</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15767.648290044643!2d-36.482119!3d-8.887767!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7070ce056b614c9%3A0x6436bbc8bd432db7!2sA%20Igreja%20de%20Jesus%20Cristo%20dos%20Santos%20dos%20%C3%9Altimos%20Dias!5e0!3m2!1spt-BR!2sbr!4v1687823862728!5m2!1spt-BR!2sbr" width="1300" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

          <!-- <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div> -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- Rodapé --> 
  <?php rodape() ?>

</body>

</html>