<?php

    class Produtos extends CI_Controller{
        public function index(){

            // Busaca produtos no banco
            $this->load->database();
            $this->load->model("produtos_model");
            $produtos = $this->produtos_model->buscaTodos();
            
            // Enviado dados para view
            $dados = array("produtos" => $produtos);
            $this->load->view("produtos/index.php",$dados);
        }
    }

?>