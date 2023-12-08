<?php 

    include 'portal_estaca/conexao.php';
    require 'controller.php';

    $conexao = new Conexao();

    $conn = $conexao->conectar();

    $idAta = $_GET['id'];

    $query = "SELECT * FROM tb_ata_reuniao WHERE id= :id";

    $stmt = $conn->prepare($query);
    $stmt->bindValue(':id', $idAta, PDO::PARAM_INT);
    $stmt->execute();

    $Resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // print_r($Resultado);

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
  <link rel="stylesheet" href="trumbowyg/dist/ui/trumbowyg.min.css">

</head>

<body>

<main>
    <!-- Barra inicial -->
    <?php menu_inicial_1()?>

    <!-- Navbar inicial 2  -->
    <?php menu_inicial_2()?>


    <?php if (isset($_GET['inclusao']) && $_GET['inclusao'] == 1) { ?>

    <div class="bg-danger pt-2 text-white d-flex justify-content-center">
        <h5>Insira as informações!</h5>
    </div>

    <?php } ?>

    <?php if (isset($_GET['inclusao']) && $_GET['inclusao'] == 2) { ?>

    <div class="bg-primary pt-2 text-white d-flex justify-content-center">
        <h5>Cadastrado com sucesso!</h5>
    </div>

    <?php } ?>
   
    <div class="container">
        <div class="row">

            <div class="mt-4 mb-2">
                <h4>Editando uma agenda</h4>
            </div>

            <form action="portal_estaca/update_ata_para_reuniao_controller.php" method="$_REQUEST">

                <div class="col-2">
                    
                    <label for="">ID:</label>
                    <input type="text" class="form-control" readonly name='id' value="<?= $Resultado[0]['id'] ?>">


                </div>

                <div class="col-12">
                        <label for="">Presidida por: </label>
                        <select class="form-control" name="lider_ata" id="">

                        <?php foreach ($presidencia as $i => $p) { ?>

                        <option value="<?= $Resultado[0]['lider_ata'] ?>"><?= $p ?></option>

                        <?php } ?>

                </select>
                </div>

                </br>

                

                <div class="col-12">
                        <label for="">Dirigida por: </label>
                        <select class="form-control" name="dirigida_ata" id="">

                        <?php foreach ($presidencia as $i => $p) { ?>

                        <option value="<?= $Resultado[0]['lider_ata'] ?>"><?= $p ?></option>

                        <?php } ?>

                </select>
                </div>

                </br>
     
                <div class="col-5">
                        <label for="">Data</label>
                        <input name="data_ata" required class="form-control" value="<?= $Resultado[0]['data_ata'] ?>" type="date">
                        
                </div>

                    </br>

                <div class="col-12">
                        <label for="">Título da Reunião:</label>
                        <input name="titulo_ata" value="<?= $Resultado[0]['titulo_ata'] ?>" required class="form-control"  type="text">
                </div>

                    </br>

                <div class="col-12">
                        <label for="">Composição da Ata:</label>
                        <textarea class="form-control" required name="detalhe_ata"  id="trumbowyg" cols="200" rows="100"><?= $Resultado[0]['detalhe_ata'] ?></textarea>
                </div>

                <div class="col-10 mt-2"> <!-- Botão de Submit do formulário -->
                        <button class="btn btn-primary btn-block" type="submit">Cadastrar Ata</button>
                        <button class="btn btn-success btn-block" >Gerar PDF</button>
                        <a href="area_lideranca.php" class="btn btn-warning btn-block">Voltar</a>
                </div>

            </form>
            
        </div>
    </div>

</main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="trumbowyg/dist/trumbowyg.min.js"></script>
    <script>
        $('#trumbowyg').trumbowyg({
            btns: [ ['viewHTML'],
                    ['undo', 'redo'], // Only supported in Blink browsers
                    ['formatting'],
                    ['strong', 'em', 'del'],
                    ['superscript', 'subscript'],
                    ['link'],
                    ['insertImage'],
                    ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
                    ['unorderedList', 'orderedList'],
                    ['horizontalRule'],
                    ['removeformat'],
                    ['fullscreen']
                  ],
            autogrow: true
        });
    </script>

    <?php rodape()?>
</body>
</html>