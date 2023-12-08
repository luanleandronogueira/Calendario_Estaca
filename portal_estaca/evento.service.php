<?php 

    // CRUD 
    class EventoService {

        private $conexao;
        private $data_evento;
        private $titulo_evento;
        private $detalha_evento;

        private $id;

        public function setId($id) {
        $this->id = $id;
    }
      

        public function __construct(Conexao $conexao, $data_evento, $titulo_evento, $detalha_evento)
        {
            $this->conexao = $conexao->conectar();
            $this->data_evento = $data_evento;
            $this->titulo_evento = $titulo_evento;
            $this->detalha_evento = $detalha_evento;
        }


        // Metodo Create
        public function inserir(){

            $query = "INSERT INTO tb_evento_calendario(data_evento, titulo_evento, detalha_evento) VALUES (:data_evento, :titulo_evento, :detalha_evento)";


            $stmt = $this->conexao->prepare($query);

            $stmt->bindValue(':data_evento', $this->data_evento);
            $stmt->bindValue(':titulo_evento', $this->titulo_evento);
            $stmt->bindValue(':detalha_evento', $this->detalha_evento);

            
            $stmt->execute();

        }

        // Metodo Read
        public function recuperar(){


            
            $query = "SELECT id, data_evento, titulo_evento FROM tb_evento_calendario ORDER BY data_evento ASC, id ASC";
            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);  

        }

        // Metodo Update
        public function atualizar()
        {
            $UpDateQuery = "UPDATE tb_evento_calendario 
                            SET data_evento = :data_evento, titulo_evento = :titulo_evento, detalha_evento = :detalha_evento
                            WHERE id = :id";

            $stmt = $this->conexao->prepare($UpDateQuery);

            $stmt->bindValue(':data_evento', $this->data_evento);
            $stmt->bindValue(':titulo_evento', $this->titulo_evento);
            $stmt->bindValue(':detalha_evento', $this->detalha_evento);
            $stmt->bindValue(':id', $this->id);

            try {
                $stmt->execute();
            } catch (PDOException $e) {
                echo "Erro ao executar a consulta: " . $e->getMessage();
            }
        }

        // Metodo Delete
        public function remover(){

        }

        

    }



?>