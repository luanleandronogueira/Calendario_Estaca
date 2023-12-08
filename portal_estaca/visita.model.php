<?php 

class Visita {

        private $id;
        private $data_visita;
        private $titulo_visita;


   public function __get($atributo) {
    
        return $this->$atributo;

   }

   public function __set($atributo, $valor) {

    $this->$atributo = $valor;

   }

}


?>