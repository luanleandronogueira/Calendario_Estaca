<?php 

    class Compromisso {

        private $id;
        private $sujeito_compromisso;
        private $data_compromisso;
        private $titulo_compromisso;
        private $detalhe_compromisso;

        public function __get($atributo)
        {
            return $this->$atributo;
        }

        public function __set($atributo, $valor)
        {
            $this->$atributo = $valor;
        }
        

    }





?>