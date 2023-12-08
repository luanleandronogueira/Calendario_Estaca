<?php 
    include 'controller.php';
    include 'recuperar.php';

    $conn = $conexao->conectar();

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
</head>

<body>

<main>
    <!-- Barra inicial -->
    <?php menu_inicial_1()?>

    <!-- Navbar inicial 2  -->
    <?php menu_inicial_2()?>

    <!-- ======= Título do Calendário ======= -->
    <section>
        <div class="section-title p-4">
          <h3>Calendário da Visitas da Liderança de <span> <?= date('Y')?></span></h3>
          <p>Sujeito a mudança sem aviso prévio</p>
        </div>

   
    <?php foreach($meses as $i => $mes ) { ?>
        <?php if (date('m') <= $i)  { ?>
        <div class="container">
          <div class="row">
             
                <div class="p-1">
                        <div class="card">
                            <div class="card-body ">
                                <h5 class="card-title"><?= $mes ?></h5>
                                <table class="table">
                                    
                                    <thead>
                                        <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Data</th>
                                        <th scope="col" class="text-primary">Unidade a Ser Visitada</th>
                                        <th scope="col"></th>
                                        </tr>
                                    </thead>
                                        <tbody>
                                        <th scope="row"></th>
                                                <td><strong> </strong></td>
                                                <td><p class="card-text"> </p></td>
                                                <td>
                                                <?php
                                    
                                    // Consulta SQL para obter os eventos do mês atual
                                            $sql = "SELECT * FROM tb_visitas_presidencia WHERE MONTH(data_visita) = :mes AND YEAR(data_visita) = YEAR(CURRENT_DATE) ORDER BY data_visita, id";
                                            $stmt = $conn->prepare($sql);
                                            $stmt->bindParam(':mes', $i);
                                            $stmt->execute();

                                            // Loop através dos resultados da consulta
                                            while ($visita = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                ?>                                           
                                                <tr>
                                                    <th scope="row"><?= $visita['id'] ?></th>
                                                    <td><?= $data_formatada = date("d/m", strtotime($visita['data_visita'])) ?></td>
                                                    <td><strong><em><?= $visita['titulo_visita'] ?></em></strong></td>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php }?> 
    

        </main>
    
    <?php rodapeCalendario()?>


</body>
</html>