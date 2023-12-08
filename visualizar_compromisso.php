<?php 

include 'controller.php';
include 'portal_estaca/conexao.php';

$conexao = new Conexao();

$conn = $conexao->conectar();

$Id = $_GET['id'];

// echo  $Id;

$query = "SELECT * FROM tb_agenda_compromisso WHERE id = :Id";
$stmt = $conn->prepare($query);
$stmt->bindParam(':Id', $Id);
$stmt->execute();

$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

// echo '<pre>';
//     print_r($resultado) ;
// echo '</pre>';



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

    

    <div class="container">
        <div class="row">

            <div class="mt-4 mb-2">
                <h4>Agendar Compromisso</h4>
            </div>

            <form action="portal_estaca/update_compromisso_agenda_controller.php" method="$_REQUEST">

                <div class="col-3">
                        <label for="">Id</label>
                        <input name="id" readonly class="form-control" type="number" value='<?= $resultado[0]['id'] ?>' >
                </div>

                <label for="" class="label-form ">Selecione o Líder:</label>
                <select class="form-control" name="sujeito_compromisso" id="">

                <?php foreach ($presidencia as $i => $p) { ?>

                    <option value="<?= $i ?>"><?= $p ?></option>

                <?php } ?> 

                </select>

                </br>   
                <div class="col-6">
                        <label for="">Data</label>
                        <input name="data_compromisso" class="form-control" type="date" value='<?= $resultado[0]['data_compromisso'] ?>' >
                </div>

                    </br>

                <div class="col-6 col-12">
                        <label for="">Título do Compromisso:</label>
                        <input name="titulo_compromisso" class="form-control"  type="text"   value="<?= $resultado[0]['titulo_compromisso']  ?>" >
                </div>

                    </br>

                <div class="col-12">
                    <label for="">Detalhes do Compromisso:</label>
                        <textarea class="form-control" name="detalhe_compromisso"  id="trumbowyg" cols="100" rows="5"> <?= $resultado[0]['detalhe_compromisso'] ?>    </textarea>
                </div>

                <div class="col-10 mt-2"> <!-- Botão de Submit do formulário -->
                        <button class="btn btn-primary btn-sm mt-1" type="submit"><i class="bi bi-send-check"></i> Atualizar</button>
                        <a href="portal_estaca/realizar_compromisso.php?id=<?= $Id?>" type="submit" class="btn btn-success btn-sm mt-1"><i class="bi bi-check2-all"></i> Realizado</a>
                        <button class="btn btn-danger btn-sm mt-1" type="submit"><i class="bi bi-x-circle"></i> Excluir</button>
                        <a href="agenda_lideranca.php" class="btn btn-warning btn-sm mt-1"><i class="bi bi-arrow-return-left"></i> Voltar</a>
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