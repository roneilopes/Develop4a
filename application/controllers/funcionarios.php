<?php

class Funcionarios extends Controller {

    function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }

    public function index() {
        $this->render('funcionarios/index');
    }

    public function add() {
        
        $end = new Endereco();
        $end->get();
        $this->data['dadosEnd'] = $end->all_to_array();
        
        $cargo = new Cargo();
        $cargo->get();
        $this->data['dadosCargo'] = $cargo->all_to_array();
        
        $this->view('funcionarios/add', $this->data);
        
        if(isset ($_POST['submit'])){
            $novo = $this->post_to_obj(array('nome','entrada','telefone','cargo_id','endereco_id'), new Funcionario());
            $novo->save();
            $this->index();
        }else{
            $this->render('funcionarios/add');
        }
    }

    public function edit(){
         $this->render('funcionarios/edit');
    }
}
?>