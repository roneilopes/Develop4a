<?php

class Produtos extends Controller{

    function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }

    public function index() {
        $this->render('produtos/index');
    }
    
    public function add(){
        if(isset ($_POST['submit'])){
            $novo = $this->post_to_obj(array('descricao','quantidade','fornecedor_id','categoria_id','quantidade','valor'), new Produto());
            $novo->save();
            $this->render('produtos/index');
        }else{
            $this->render('produtos/add');
        }
    }
    
    public function edit(){
         $this->render('produtos/edit');
    }

}

?>