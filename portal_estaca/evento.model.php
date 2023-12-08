<?php 

    class Evento {
        
        private $id;
        private $data_evento;
        private $titulo_evento;
        private $detalha_evento;
        

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