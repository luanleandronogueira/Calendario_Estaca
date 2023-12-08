<?php 

    class CompromissoService
    {
        private $conexao;
        private $sujeito_compromisso;
        private $data_compromisso;
        private $titulo_compromisso;
        private $detalhe_compromisso;

        private $id;

        public function setId($id) {
        $this->id = $id;}


        public function __construct(Conexao $conexao, $sujeito_compromisso, $data_compromisso, $titulo_compromisso, $detalhe_compromisso){

            $this->conexao = $conexao->conectar();
            $this->sujeito_compromisso = $sujeito_compromisso;
            $this->data_compromisso = $data_compromisso;
            $this->titulo_compromisso = $titulo_compromisso;
            $this->detalhe_compromisso = $detalhe_compromisso;
        }

        public function inserir_Compromisso() {

            $query = "INSERT INTO tb_agenda_compromisso(sujeito_compromisso, data_compromisso, titulo_compromisso, detalhe_compromisso)VALUES (:sujeito_compromisso, :data_compromisso, :titulo_compromisso, :detalhe_compromisso)";

            $stmt = $this->conexao->prepare($query);

            $stmt->bindValue(':sujeito_compromisso', $this->sujeito_compromisso);
            $stmt->bindValue(':data_compromisso', $this->data_compromisso);
            $stmt->bindValue(':titulo_compromisso', $this->titulo_compromisso);
            $stmt->bindValue(':detalhe_compromisso', $this->detalhe_compromisso);

            $stmt->execute();

        }



    }

        

    
?>