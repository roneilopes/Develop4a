<?php

class Cargos extends Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }

    public function index() {
        $car = new Cargo();
        $car->get();
        $this->data['valores'] = $car->all_to_array();  
        $this->render('cargos/index');
    }
    
    public function add(){
        
        if(isset ($_POST['submit'])){
            $novo = $this->post_to_obj(array('descricao','salario'), new Cargo());
            $novo->save();
            redirect('cargos');
        }else{
            $this->render('cargos/add');
        }
    }
    
    public function edit($id){
        
        if(isset ($_POST['submit'])){
            $nobj = $this->post_to_obj(array('descricao','salario'), new Cargo());
            $nobj->save();
            redirect('cargos');
        }
        
        $carg = new Cargo();
        $carg->get();
        $this->data['dadosCargo'] = $carg->all_to_array();
        $this->cobj->getById($id);
        $this->data['edit_user'] = $this->cobj->to_array();
        $this->render('cargos/edit');
    }
    
    public function mostrar($id) {
        
        $carg = new Cargo();
        $carg->get();
        //print_r($carg);
        $this->data['dadosCargo'] = $carg->all_to_array();
        $this->cobj->getById($id);
        $this->data['edit_user'] = $this->cobj->to_array();
        
        $this->render('cargos/mostrar');

    }
}

?>
