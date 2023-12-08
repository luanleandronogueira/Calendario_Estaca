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
                <h4>Agendar Compromisso</h4>
            </div>

            <form action="portal_estaca/inserir_compromisso_agenda_controller.php" method="$_REQUEST">

                <label for="" class="label-form ">Selecione o Líder:</label>
                <select class="form-control" name="sujeito_compromisso" id="">

                    <?php foreach ($presidencia as $i => $p) { ?>

                    <option value="<?= $i ?>"><?= $p ?></option>

                    <?php } ?>

                </select>

                </br>   
                <div class="col-6">
                        <label for="">Data</label>
                        <input name="data_compromisso" class="form-control" type="date">
                </div>

                    </br>

                <div class="col-6">
                        <label for="">Título do Compromisso:</label>
                        <input name="titulo_compromisso" class="form-control"  type="text">
                </div>

                    </br>

                <div class="col-12">
                    <label for="">Detalhes do Compromisso:</label>
                        <textarea class="form-control" name="detalhe_compromisso"  id="trumbowyg" cols="100" rows="5"></textarea>
                </div>

                <div class="col-10 mt-2"> <!-- Botão de Submit do formulário -->
                        <button class="btn btn-primary btn-block" type="submit">Agendar</button>
                        <a href="agenda_lideranca.php" class="btn btn-warning btn-block">Voltar</a>
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