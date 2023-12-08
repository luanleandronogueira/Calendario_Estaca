<?php

class Ata {

private $id;
private $lider_ata;
private $dirigida_ata;
private $data_ata;
private $titulo_ata;
private $detalhe_ata;


    public function __get($atributo){

        return $this->$atributo;

    }

    public function __set($atributo, $valor){

        $this->$atributo = $valor;
    }

}

?>