<?php

class Fornecedores extends Controller {

    function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }

    public function index() {
        $for = new Fornecedor();
        $for->get();
        $this->data['valores'] = $for->all_to_array();
        $this->view('fornecedores/index', $this->data);
        $this->render('fornecedores/index');
    }
    
    public function add(){
        if(isset ($_POST['submit'])){
            // FALTA ENDERECO ID
            $novo = $this->post_to_obj(array('nome','cnpj','telefone','endereco_id'), new Fornecedor());
            $novo->save();
            $this->index();
        }else{
            $this->render('fornecedores/add');
        }
    }
    
    public function edit(){
    if(isset ($_POST['submit'])){
            $novo = $this->post_to_obj(array('nome','cnpj','telefone','endereco_id'), new Fornecedor());
            $novo->update();
            $this->index();
        }else{
            $this->render('fornecedores/add');
        }
    }
   
}
?>