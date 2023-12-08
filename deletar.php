<?php 
    include 'controller.php';
    require "portal_estaca/evento.model.php";
    require "portal_estaca/evento.service.php";
    require "portal_estaca/conexao.php";

    // trago a conexão com o banco e salvo ela na variavel conn
    $conexao = new Conexao();
    $conn = $conexao->conectar();

    if (!empty($_GET['id'])) {

        $IdEvento = $_GET['id'];

        $sql = "SELECT * FROM tb_evento_calendario WHERE id=:id";

        $stmt = $conn->prepare($sql);

        $stmt->bindValue(':id', $IdEvento, PDO::PARAM_INT);
        $stmt->execute();

        $Resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        // Para Debugar caso necessário
        // echo '<pre>';
        //  print_r($Resultado);
        // echo '</pre>';

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

    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="section-title">
            <h3>Tem certeza que quer deletar o evento <span> <em><?=$Resultado[0]['titulo_evento']?></em> ?</span></h3> <br>
            <div>
                <a href="delete_controller.php?id=<?= $_GET['id']?>" class="btn btn-danger">Excluir</a>
                <a href="editar_calendario.php" class="btn btn-warning">Voltar</a>
            </div>
        </div>
    </section><!-- End Services Section -->
         

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    </main>
    
    <?php rodape()?>
</body>
</html>