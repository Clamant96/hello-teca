<?php

class Planos extends Controller {

    public function __construct() {
        $this->planoModel = $this->model('Plano');
    }

    public function listar() {
        $dados = [
            'planos' => $this->planoModel->listarPlanos()
        ];

        $this->view('planos/planos', $dados);
    }

}