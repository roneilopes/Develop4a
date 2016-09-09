<?php

class Categorias extends Controller {

    function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }

    public function index() {
        $cat = new Categoria();
        $cat->get();
        $this->data['valores'] = $cat->all_to_array();
        $this->view('categorias/index', $this->data);
        $this->render('categorias/index');
    }
    
    public function add(){
        if(isset ($_POST['submit'])){
            $novo = $this->post_to_obj(array('nome'), new Categoria());
            $novo->save();
            $this->index();
        }else{
            $this->render('categorias/add');
        }
    }
    
    public function edit(){
        if(isset($_POST['submit'])){
            $novo = $this->post_to_obj(array('nome'), new Categoria());
            $novo->update();
            $this->render('categoria/index');
        }else{
            $this->render('categoria/edit');
        }
    }

}

?>
