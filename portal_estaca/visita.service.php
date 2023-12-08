<?php 

class VisitaService {

    private $conexao;
    private $id;
    private $data_visita;
    private $titulo_visita;

    public function __construct(Conexao $conexao, $data_visita, $titulo_visita)
    {
        $this->conexao = $conexao->conectar();
        $this->data_visita = $data_visita;
        $this->titulo_visita = $titulo_visita;
    }

    public function Inserir_Visita() {

        // lógica para inserir no Banco de Dados

        $query = "INSERT INTO tb_visitas_presidencia (data_visita, titulo_visita) VALUES (:data_visita, :titulo_visita)";

    
        $stmt = $this->conexao->prepare($query);

        $stmt->bindValue(':data_visita', $this->data_visita);
        $stmt->bindValue(':titulo_visita', $this->titulo_visita);

        $stmt->execute();

        header('Location: editar_calendario_visitas.php?inclusao=1');

    }

}


?>