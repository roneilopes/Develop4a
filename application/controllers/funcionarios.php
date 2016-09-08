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
        if(isset ($_POST['submit'])){
            $novo = $this->post_to_obj(array('nome','entrada','telefone','cargo_id','endereco_id'), new Funcionario());
            $novo->save();
        }else{
            $this->render('funcionarios/add');
        }
    }
}
?>