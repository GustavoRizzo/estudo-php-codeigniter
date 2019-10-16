<?php

    class Produtos extends CI_Controller{
        public function index(){

            // Busaca produtos no banco
            $this->load->database();
            $this->load->model("produtos_model");
            $produtos = $this->produtos_model->buscaTodos();
            
            //intanciando helper
            $this->load->helper("url");
            $this->load->helper("currency");
            // Enviado dados para view de produtos
            $dados = array("produtos" => $produtos);
            // Carrega formulário            
		    $this->load->helper(array("form"));
            $this->load->view("produtos/index.php",$dados);
        }
    }

?>