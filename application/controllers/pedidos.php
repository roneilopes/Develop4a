<?php

class Pedidos extends Controller {

    function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }

    public function index() {
        $this->render('pedidos/index');
    }

    public function add() {
        if(isset ($_POST['submit'])){
            $novo = $this->post_to_obj(array('id','funcionario_id','cliente_id','data_cadastro'), new Pedido());
            $novo->save();
        }else{
            $this->render('pedidos/add');
        }
    }
}
?>