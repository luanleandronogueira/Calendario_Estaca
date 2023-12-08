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
    <!-- <?php //menu_inicial_2()?> -->

    <!-- ======= Título do Calendário ======= -->
   
        <div class="section-title p-4">
          <h3>Calendário da Estaca<span> <?= date('Y')?></span></h3>
          <p>Sujeito a mudança sem aviso prévio</p>
        </div>



    
        <div class="container">
          <div class="row">

          <div class="mb-3">
            <button id="copyButton" class="btn btn-primary text-white">Compartilhar Calendário</button>
          </div>

          <script>
        // Função para copiar o link da página
        function copyLink() {
            var currentUrl = window.location.href; // Obtém a URL da página atual
            
            var tempInput = document.createElement('input'); // Cria um elemento input temporário
            document.body.appendChild(tempInput); // Adiciona o elemento à página
            tempInput.value = currentUrl; // Define o valor do input como a URL
            tempInput.select(); // Seleciona o conteúdo do input
            
            document.execCommand('copy'); // Executa o comando de cópia
            
            document.body.removeChild(tempInput); // Remove o elemento input temporário
            
            // Exibe um alerta de "Link copiado com sucesso"
            alert('Link copiado com sucesso!');
        }
        
        // Adiciona um ouvinte de evento ao botão
        var copyButton = document.getElementById('copyButton');
        copyButton.addEventListener('click', copyLink);
    </script>
           

           <?php foreach ($meses as  $i => $mes) { ?>
                <!--Card para loop while -->
                <div class="col-sm-6 p-1">
                        <div class="card">
                            <div class="card-body ">
                                <h5 class="card-title"><?= $mes ?></h5>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Data</th>
                                        <th scope="col">Evento</th>
                                        <th scope="col"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        // Consulta SQL para obter os eventos do mês atual
                                        $sql = "SELECT * FROM tb_evento_calendario WHERE MONTH(data_evento) = :mes AND YEAR(data_evento) = YEAR(CURRENT_DATE) ORDER BY data_evento, id";
                                        $stmt = $conn->prepare($sql);
                                        $stmt->bindParam(':mes', $i);
                                        $stmt->execute();
                                                                                
                                        while($evento = $stmt->fetch(PDO::FETCH_ASSOC)) {;
                                        ?>
                                        <tr>
                                            <!-- Condicional para mudar a cor no mês atual -->

                                           <?php  if ($data_formatada = date("m", strtotime($evento['data_evento'])) == date('m')) {  ?>
                                            <th scope="row" class='text-success'><em><?= $evento['id'] ?></em></th>
                                            <td class='text-success'><em><?= $data_formatada = date("d/m ", strtotime($evento['data_evento'])) ?></em></td>
                                            <td class='text-success'> <strong><em><?= $evento['titulo_evento'] ?></em></strong> </td> 
                                            <td></td> 

                                           <?php } else { ?>


                                            <th scope="row"><?= $evento['id'] ?></th>
                                            <td><?= $data_formatada = date("d/m", strtotime($evento['data_evento'])) ?></td>
                                            <td> <a href="detalhes_evento_calendario.php?id=<?= $evento['id'] ?>"> <?= $evento['titulo_evento'] ?> </a></td> 
                                            <td></td> 
                                            <?php  }?>

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

    </main>
    
    <?php rodapeCalendario()?>


</body>
</html>