<?php

class Post {
    private $db;

    public function __construct() {
        $this->db = new Database();

    }

    public function listarPosts() {
        $this->db->query("SELECT *,
        tb_mensagem.id          as      postId,
        tb_mensagem.criado_em   as      postDataCadastro,
        tb_clientes.id          as      usuarioID,
        tb_clientes.criado_em   as      usuarioDataCadastro

        FROM tb_mensagem
        INNER JOIN tb_clientes ON

        tb_mensagem.usuario_id = tb_clientes.id

        ORDER BY tb_mensagem.id DESC

        ");
        
        return $this->db->resultados();
    }

}