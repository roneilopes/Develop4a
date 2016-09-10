<?php

class Produtos extends Controller{

    function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }

    public function index() {
        $prod = new Produto();
        $prod->get();
        $this->data['valores'] = $prod->all_to_array();
        $this->render('produtos/index');
    }
    
    public function add(){
        if(isset ($_POST['submit'])){
            $novo = $this->post_to_obj(array('descricao','quantidade','fornecedor_id','categoria_id','quantidade','valor'), new Produto());
            $novo->save();
            redirect('produtos');
        }else{
            $this->render('produtos/add');
        }
    }
    
    public function edit(){
         $this->render('produtos/edit');
    }

}

?>