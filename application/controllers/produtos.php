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
        $for = new Fornecedor();
        $for->get();
        $this->data['dadosFor'] = $for->all_to_array();
        
        $cat = new Categoria();
        $cat->get();
        $this->data['dadosCat'] = $cat->all_to_array();
        
        if(isset ($_POST['submit'])){
            $novo = $this->post_to_obj(array('descricao','quantidade','fornecedor_id','categoria_id','quantidade','valor'), new Produto());
            $novo->save();
            redirect('produtos');
        }else{
            $this->render('produtos/add');
        }
    }
    
    public function edit(){
        
        if(isset ($_POST['submit'])){
            $novo = $this->post_to_obj(array('id','descricao','quantidade','fornecedor_id','categoria_id','quantidade','valor'), new Produto());
            $novo->save();
            redirect('produtos');
        }
  
            $forn = new Fornecedor();
            $forn->get();
            $this->data['dadosForn'] = $forn->all_to_array();
            $this->fornobj->getById($id);
            $this->data['edit_prod'] = $this->fornobj->to_array();
            
            $cat = new Categoria();
            $cat->get();
            $this->data['dadosCateg'] = $cat->all_to_array();
            $this->categobj->getById($id);
            $this->data['edit_prod'] = $this->categobj->to_array();
            
         $this->render('produtos/edit');
    }
    
    public function mostrar($id) {
        
        // PRODUTOS
        
        $prod = new Produto();
        $prod->get();
        
        $this->data['dadosProd'] = $prod->all_to_array();
        $this->prodobj->getById($id);
        $this->data['edit_prod'] = $this->prodobj->to_array();
        
        
        // FORNECEDORES
      
        $forn = new Fornecedor();
        $forn->get();
        $this->data['dadosForn'] = $forn->all_to_array();
        $this->prodobj->getById($id);
        $this->data['edit_prod'] = $this->prodobj->to_array();
        
        // CATEGORIAS
        
        $cat = new Categoria();
        $cat->get();
        $this->data['dadosCateg'] = $cat->all_to_array();
        $this->prodobj->getById($id);
        $this->data['edit_prod'] = $this->prodobj->to_array();
        
     
        // CHAMA PAGINA
        
        $this->render('produtos/mostrar');
    }
    

}
?>