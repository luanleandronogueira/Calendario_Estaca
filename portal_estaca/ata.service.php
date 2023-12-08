<?php 

class AtaService {

    private $conexao;
    private $lider_ata;
    private $dirigida_ata;
    private $data_ata;
    private $titulo_ata;
    private $detalhe_ata;


    public function __construct(Conexao $conexao, $lider_ata, $dirigida_ata, $data_ata, $titulo_ata, $detalhe_ata)
    {
        $this->conexao = $conexao->conectar();
        $this->lider_ata = $lider_ata;
        $this->dirigida_ata = $dirigida_ata;
        $this->data_ata = $data_ata;
        $this->titulo_ata = $titulo_ata;
        $this->detalhe_ata = $detalhe_ata;
    }

    public function inserirAta() {

        $query = 'INSERT INTO tb_ata_reuniao (lider_ata, dirigida_ata, data_ata, titulo_ata, detalhe_ata) VALUES (:lider_ata, :dirigida_ata, :data_ata, :titulo_ata, :detalhe_ata)';


        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':lider_ata', $this->lider_ata);
        $stmt->bindValue(':dirigida_ata', $this->dirigida_ata);
        $stmt->bindValue(':data_ata', $this->data_ata);
        $stmt->bindValue(':titulo_ata', $this->titulo_ata);
        $stmt->bindValue(':detalhe_ata', $this->detalhe_ata);

        $stmt->execute();
    }



}



?>