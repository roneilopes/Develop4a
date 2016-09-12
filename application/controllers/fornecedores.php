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
        $this->render('fornecedores/index');
    }
    
    public function add(){
        
        $end = new Endereco();
        $end->get();
        $this->data['dadosEnd'] = $end->all_to_array();
        $this->view('fornecedores/add', $this->data);
        
        if(isset ($_POST['submit'])){
            $novo = $this->post_to_obj(array('nome','cnpj','telefone','endereco_id'), new Fornecedor());
            $novo->save();
            redirect('fornecedores');
        }else{
            $this->render('fornecedores/add');
        }
        
    }
    
    public function edit($id){
            if(isset ($_POST['submit'])){
                    $novo = $this->post_to_obj(array('id','nome','cnpj','telefone','endereco_id'), new Fornecedor());
                    $novo->save();
                    redirect('fornecedores');
            }
            
            $end = new Endereco();
            $end->get();
            $this->data['dadosEnd'] = $end->all_to_array();
            $this->fornobj->getById($id);
            $this->data['edit_forn'] = $this->fornobj->to_array();
            $this->render('fornecedores/edit');
    }
    
    public function mostrar($id) {
        
        // DADOS DO FORNECEDOR
        
        $forn = new Fornecedor();
        $forn->get();
        $this->data['dadosForn'] = $forn->all_to_array();
        $this->fornobj->getById($id);
        $this->data['edit_forn'] = $this->fornobj->to_array();
        
        
        // ENDEREÇOS
      
        $end = new Endereco();
        $end->get();
        $this->data['dadosForn'] = $end->all_to_array();
        $this->fornobj->getById($id);
        $this->data['edit_forn'] = $this->fornobj->to_array();
        
        // CHAMA PAGINA
        
        $this->render('fornecedores/mostrar');
        
    }
    
    public function deleta($id) {
        
        
            $this->fornobj->deleteById($id);
            redirect('fornecedores');
    }   
}
?>