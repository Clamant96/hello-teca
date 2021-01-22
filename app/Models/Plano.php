<?php 

class Plano {
    private $db;

    public function __construct() {
        $this->db = new Database();

    }

    public function listarPlanos() {
        $this->db->query("SELECT * FROM tb_planos");
        
        return $this->db->resultados();
    }

}