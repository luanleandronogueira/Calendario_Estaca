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
                <h4>Criando uma agenda</h4>
            </div>

            <form action="portal_estaca/ata_para_reuniao_controller.php" method="$_REQUEST">


                <div class="col-12">
                        <label for="">Presidida por: </label>
                        <select class="form-control" name="lider_ata" id="">

                        <?php foreach ($presidencia as $i => $p) { ?>

                        <option value="<?= $p ?>"><?= $p ?></option>

                        <?php } ?>

                </select>
                </div>

                </br>

                <div class="col-12">
                        <label for="">Dirigida por: </label>
                        <select class="form-control" name="dirigida_ata" id="">

                        <?php foreach ($presidencia as $i => $p) { ?>

                        <option value="<?= $p ?>"><?= $p ?></option>

                        <?php } ?>

                </select>
                </div>

                </br>
     
                <div class="col-5">
                        <label for="">Data</label>
                        <input name="data_ata" required class="form-control" type="date">
                        
                </div>

                    </br>

                <div class="col-12">
                        <label for="">Título da Reunião:</label>
                        <input name="titulo_ata" required class="form-control"  type="text">
                </div>

                    </br>

                <div class="col-12">
                        <label for="">Composição da Ata:</label>
                        <textarea class="form-control" required name="detalhe_ata"  id="trumbowyg" cols="200" rows="100"></textarea>
                </div>

                <div class="col-10 mt-2"> <!-- Botão de Submit do formulário -->
                        <button class="btn btn-primary btn-block" type="submit">Cadastrar Ata</button>
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