<?php 
    include 'controller.php';
    require 'portal_estaca/conexao.php';

    $conexao = new Conexao();

    $conn = $conexao->conectar();

    $query = "SELECT * FROM tb_ata_reuniao ORDER BY data_ata, id";

    $stmt = $conn->prepare($query);

    $stmt->execute();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php scripts_inicializacao()?>
    <meta charset="utf-8">
</head>

<body>

<main>
    <!-- Barra inicial -->
    <?php menu_inicial_1()?>

    <!-- Navbar inicial 2  -->
    <?php menu_inicial_2()?>

    <?php if (isset($_GET['inclusao']) && $_GET['inclusao'] == 2) { ?>

        <div class="bg-success pt-2 text-white d-flex justify-content-center">
            <h5>Ata Atualizado com Sucesso!</h5>
        </div>

    <?php } ?>

    <?php if (isset($_GET['inclusao']) && $_GET['inclusao'] == 3) { ?>

    <div class="bg-danger pt-2 text-white d-flex justify-content-center">
        <h5>Ata Deletada com Sucesso!</h5>
    </div>

    <?php } ?>

   
    <div class="container">
        <div class="row">

            <div class="mt-4">
                <h4>Atas Cadastradas</h4>
            </div>

            <div class="col-12 mt-4">
                <?php
                    $contador = 1; // Inicializa o contador
                    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $id = $result['id'];
                    $data = $result['data_ata'];
                    $titulo = $result['titulo_ata'];
                    $detalhe = $result['detalhe_ata'];
                    $idHeading = 'heading' . $contador; // Gera o ID único para o heading
                    $idCollapse = 'collapse' . $contador; // Gera o ID único para o collapse
                ?>
                    <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="<?php echo $idHeading; ?>">
                        <h5 class="mb-0">
                                    
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#<?php echo $idCollapse; ?>" aria-expanded="false" aria-controls="<?php echo $idCollapse; ?>">
                            <?php echo '#' . ' ' .$id ?> - <?= date("d/m/Y", strtotime($data))  ?> - <?php echo $titulo; ?>
                            </button>

                        </h5>
                        </div>
                        <div id="<?php echo $idCollapse; ?>" class="collapse" aria-labelledby="<?php echo $idHeading; ?>" data-parent="#accordionExample">
                        <div class="card-body">
                        <a href="ata_completa.php?id=<?=$result['id']?>" class="btn-primary btn btn-sm mb-2" role="button">Ver Ata Completa</a>
                        <a href="deletar_ata_completa.php?id=<?=$result['id']?>" class="btn-danger btn btn-sm mb-2" role="button">Excluir Ata Completa</a>
                            </br>
                            <?php echo $detalhe; ?>
                        </div>
                        </div>
                    </div>
                    </div>
                    </br>
                <?php
                    $contador++; // Incrementa o contador a cada iteração
                } ?>
                </div>

    </div>
    






</main>
    
    <?php rodape()?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>