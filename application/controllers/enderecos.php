<?php

class Enderecos extends Controller {

    function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }

    public function index() {
        $end = new Endereco();
        $end->get();
        $this->data['valores'] = $end->all_to_array();
        $this->render('enderecos/index');
    }

    public function add() {
        if(isset ($_POST['submit'])){
            $novo = $this->post_to_obj(array('cep','logradouro','bairro','cidade','estado'), new Endereco());
            $novo->save();
            redirect('enderecos');
        }else{
            $this->render('enderecos/add');
        }
    }
    public function edit($id) {
        if(isset ($_POST['submit'])){
            $novo = $this->post_to_obj(array('id','cep','logradouro','bairro','cidade','estado'), new Endereco());
            $novo->save();
            redirect('enderecos');
        }
        
        $end = new Endereco();
        $end->get();
        $this->data['dadosEnd'] = $end->all_to_array();
        $this->endobj->getById($id);
        $this->data['edit_end'] = $this->endobj->to_array();
        $this->render('enderecos/edit');
    }
    
    public function mostrar($id) {
        $end = new Endereco();
        $end->get();
        $this->data['dadosEnd'] = $end->all_to_array();
        $this->endobj->getById($id);
        $this->data['edit_end'] = $this->endobj->to_array();
        $this->render('enderecos/mostrar');
    }
    
    public function deleta($id) {
        
        
            $this->endobj->deleteById($id);
            redirect('enderecos');
    }
}
?>