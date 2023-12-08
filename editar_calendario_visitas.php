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


    <?php if (isset($_GET['inclusao']) && $_GET['inclusao'] == 1) { ?>

    <div class="bg-primary pt-2 text-white d-flex justify-content-center">
        <h5>Visita Cadastrada com Sucesso!</h5>
    </div>

    <?php } ?>



    <?php if (isset($_GET['inclusao']) && $_GET['inclusao'] == 3) { ?>

    <div class="bg-danger pt-2 text-white d-flex justify-content-center">
        <h5>Visita Excluida com Sucesso!</h5>
    </div>

    <?php } ?>

    <!-- ======= Título do Calendário ======= -->
    <section>
        <div class="section-title p-4">
          <h3>Calendário da Visitas da Liderança de <span> <?= date('Y')?></span></h3>
        </div>

    <!-- Botão para cadastrar uma visita -->
    <div class="container">
        <div class="row">
            <div>
                <a href="inserir_visitas.php" role="button" class="btn btn-primary"><img width="15" height="15" src="https://img.icons8.com/ios/50/edit-property.png" alt="edit-property"/> Cadastrar Novas Visitas</a>
            </div>

        </div>
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
                                        <th scope="col">Visita</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>   
                                        </tr>
                                    </thead>
                                        <tbody>
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
                                                    <th><?= $visita['id'] ?></th>
                                                    <td><?= $data_formatada = date("d/m", strtotime($visita['data_visita'])) ?></td>
                                                    <td><?= $visita['titulo_visita'] ?></td>
                                                    <td>
                                                        <!-- Opções de Exclusão -->
                                                        <a class="text-danger" href="deletar_visita.php?id=<?= $visita['id'] ?>"><strong>Excluir</strong> </a>
                                                    </td>
                                                    <td>
                                                        <!-- Opções de Edição -->
                                                        <a href="editar_visita.php?id=<?= $visita['id'] ?>">
                                                        <strong>Editar</strong></a>
                                                    </td>
                                                        
                                                        
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
 
    <?php } ?>
    

        </main>
    
    <?php rodape()?>


</body>
</html>