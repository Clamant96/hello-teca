<?php

class Ajudas extends Controller {

    public function __construct() {
        $this->ajudaModel = $this->model('Ajuda');

    }

    public function central() {
        $dados = [
            
        ];

    $this->view('ajuda/ajuda', $dados);
    }

}