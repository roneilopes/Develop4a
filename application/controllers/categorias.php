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
        $this->render('categorias/index');
    }
    
    public function add(){
        if(isset ($_POST['submit'])){
            $novo = $this->post_to_obj(array('nome'), new Categoria());
            $novo->save();
            redirect('categorias');
        }else{
            $this->render('categorias/add');
        }
    }
    
    public function edit($id){
        if(isset ($_POST['submit'])){
            $nobj = $this->post_to_obj(array('id','nome'), new Categoria());
            $nobj->update();
            redirect('categorias');
        }
        
        $cat = new Categoria();
        $cat->get();
        $this->data['dadosCateg'] = $cat->all_to_array();
        $this->categobj->getById($id);
        $this->data['edit_categ'] = $this->categobj->to_array();
        
        $this->render('categorias/edit');
    }
    
    public function mostrar($id) {
        $cat = new Categoria();
        $cat->get();
        $this->data['dadosCategoria'] = $cat->all_to_array();
        $this->categobj->getById($id);
        $this->data['edit_categ'] = $this->categobj->to_array();
        
        $this->render('categorias/mostrar');
    }

}

?>
