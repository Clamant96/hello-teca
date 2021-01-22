<?php

class Paginas extends Controller {

    public function __construct() {
        $this->postModel = $this->model('Post');
        $this->produtoModel = $this->model('Produto');
        $this->usuarioModel = $this->model('Usuario');
    }

    public function index() {
        $dados = [
            'titulo' => 'Pagina Inicial',
            'descricao' => 'Criacao de site em modelo MVC',
            'posts' => $this->postModel->listarPosts(),
            'produtos' => $this->produtoModel->listarProdutos()
        ];

        $this->view('paginas/home', $dados);
    }

    public function sobre() {
        $dados = [
            'tituloPaginas' => 'Sobre Nos'
        ];
        
        $this->view('paginas/sobre', $dados);
    }

}