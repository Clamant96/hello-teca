<?php

class Baixar extends Controller {

    public function __construct() {
        $this->baixarModel = $this->model('Baixa');

    }

    public function index() {
        $dados = [

        ];

        $this->view('baixar/index', $dados);
    }

}