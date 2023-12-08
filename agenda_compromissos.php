<?php 

include 'controller.php';
include 'portal_estaca/conexao.php';

$sujeito = $_REQUEST['value'];

//print_r($sujeito);

$conexao = new Conexao();
$conn = $conexao->conectar();



// $compromisso = $stmt->fetch(PDO::FETCH_ASSOC);

// while($compromisso = $stmt->fetch(PDO::FETCH_ASSOC)) {
  
//      echo '<pre>';
//     // Acessar o valor específico da coluna "sujeito_compromisso"
 //     echo $compromisso['sujeito_compromisso'];
//     echo '</pre>';
// }

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
<html>
<head>

<?php scripts_inicializacao()?>


</head>
<body>

<!-- Barra inicial -->
<?php menu_inicial_1()?>

<!-- Navbar inicial 2  -->
<?php menu_inicial_2()?>

<?php if (isset($_GET['inclusao']) && $_GET['inclusao'] == 2) { ?>

<div class="bg-success pt-2 text-white d-flex justify-content-center">
    <h5>Atualizado com sucesso!</h5>
</div>

<?php } ?>

  <div class="container">
          <div class="row">
              <div class="mt-3">
                  <a href="inserir_compromisso_agenda.php" role="button" class="btn btn-primary"><img width="15" height="15" src="https://img.icons8.com/ios/50/edit-property.png" alt="edit-property"/> Agendar um Compromisso</a>
              </div>

          </div>
   </div>
       
    

      <div class="container">
        <div class="row">


        <?php foreach ($meses as $i => $d)  { ?>

         <?php  if ($i >= date('m')) {?> 
         
          <div class="col-12 col-sm-6 pb-3 pt-2">
                          <div class="card ">
                            <div class="card-body ">
                                <h5 class="card-title"><?= $d  ?> </h5>
                                <table class="table ">
                                    <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Data</th>
                                        <th scope="col">Compromisso</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                          <?php 
                                            $query = "SELECT * FROM tb_agenda_compromisso WHERE sujeito_compromisso = :sujeito AND MONTH(data_compromisso) = :i AND YEAR(CURRENT_DATE) ORDER BY data_compromisso, id";
                                            $stmt = $conn->prepare($query);
                                            $stmt->bindParam(':sujeito', $sujeito);
                                            $stmt->bindParam(':i', $i);
                                            $stmt->execute();?>
                                         
                                          <?php  while ($compromisso = $stmt->fetch(PDO::FETCH_ASSOC)) {  ?>
                                            <th><?= $compromisso['id'] ?></th>
                                            <td > <?= $data_formatada = date("d/m ", strtotime($compromisso['data_compromisso'])) ?></td>
                                            <td><em><a href="visualizar_compromisso.php?id=<?= $compromisso['id'] ?>"><?= $compromisso['titulo_compromisso'] ?></a></em></td> 
                                            <td><!--<a  href="http://"><span class="badge bg-success"><i class="bi bi-check2-all">Realizado</i></span></a>--></td>
                                            <td><!--<<a  href="http://"><span class="badge bg-warning"><i class="bi bi-clipboard2-plus">Editar</i></span></a>--></td>
                                            <td><!--<a  href="http://"><span class="badge bg-danger"><i class="bi bi-x-circle"> Excluir</i></span></a>--></td>
                                        
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                          </div>
          </div>
          
          <?php  }?> 
          <?php  }?>                
        

        </div>
      </div>

      

                          
       

                    
       





  <?php rodape()?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
