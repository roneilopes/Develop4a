<?php

class Clientes extends Controller {

    function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }
        
    public function index() {
        $cli = new Cliente();
        $cli->get();
        $this->data['valores'] = $cli->all_to_array();
        $this->render('clientes/index');
    }

    public function add() {
        
        $end = new Endereco();
        $end->get();
        $this->data['dadosEnd'] = $end->all_to_array();
        $this->view('clientes/add', $this->data);
        
        if(isset ($_POST['submit'])){
            $novo = $this->post_to_obj(array('nome','cpf','telefone','renda','endereco_id'), new Cliente());
            $novo->data_cadastro = date('Y/m/d H:i:s');
            $novo->save();
            redirect('clientes');
        }else{
            $this->render('clientes/add');
        }
    }

    public function edit($id){
            if(isset($_POST['submit'])){
                $nobj = $this->post_to_obj(array('nome','cpf','telefone','renda','endereco_id'), new Cliente());
                $nobj->save();
                #print_r($nobj);exit;
                redirect('clientes');
            }
            $end = new Endereco();
            $end->get();
            $this->data['dadosEnd'] = $end->all_to_array();
            $this->cliobj->getById($id);
            $this->data['edit_user'] = $this->cliobj->to_array();
            //var_dump($this->cliobj);
            $this->render('clientes/edit');
    }
    
    public function mostrar($id) {
        
        // CLIENTES
        
        $cli = new Cliente();
        $cli->get();
        $this->data['dadosCli'] = $cli->all_to_array();
        $this->cliobj->getById($id);
        $this->data['edit_user'] = $this->cliobj->to_array();
        
        
        // ENDEREÇOS
      
        $end = new Endereco();
        $end->get();
        $this->data['dadosEnd'] = $end->all_to_array();
        $this->cliobj->getById($id);
        $this->data['edit_user'] = $this->cliobj->to_array();
        
        // CHAMA PAGINA
        
        $this->render('clientes/mostrar');
    }
    
    
}
?>