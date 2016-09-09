<?php

class Clientes extends Controller {

    function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }
        
    public function index() {
        $cli = new Cliente();
        $cli->get();
        //print_r($cli->to_array()).'<br><br>';
        //print_r($cli->all_to_array());
        $this->data['valores'] = $cli->all_to_array();
        $this->view('clientes/index', $this->data['valores']);
        //$this->data['valores'] = "all_to_array";
        //var_dump($cli->all_to_array());
        $this->render('clientes/index');
        
    }

    public function add() {
        if(isset ($_POST['submit'])){
            $novo = $this->post_to_obj(array('nome','cpf','telefone','renda','data_nascimento','endereco_id'), new Cliente());
            $novo->save();
            $this->render('clientes/index');
        }else{
            $this->render('clientes/add');
        }
    }
}
?>