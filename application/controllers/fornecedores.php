<?php

class Fornecedores {

    function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }

    public function index() {
        $this->render('fornecedores/index');
    }
    
    public function add(){
        if(isset ($_POST['submit'])){
            $novo = $this->post_to_obj(array('nome','cnpj','telefone','endereco_id'), new Fornecedore());
            $novo->save();
            $this->render('fornecedores/index');
        }else{
            $this->render('fornecedores/add');
        }
    }
    
    public function edit(){
         $this->render('fornecedores/edit');
    }
   
}
?>