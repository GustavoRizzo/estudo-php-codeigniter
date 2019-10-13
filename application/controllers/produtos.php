<?php

    class Produtos extends CI_Controller{
        public function index(){

            // Criando lista de produtos
            $produtos = array();            
            $bola = array( "nome" => "Bola de futbol", "descricao" => "bola de futbol assinada pelo Zico", "preco" => 300);
            $hd = array("nome" => "HD Externo usado", "marca" => "Mega HD 300 teras", "preco" => 400);
            array_push( $produtos ,$bola , $hd);
            
            // Enviado dados para view
            $dados = array("produtos" => $produtos);
            $this->load->view("produtos/index.php",$dados);
        }
    }

?>