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
        $this->view('cargos/index', $this->data);        
        $this->render('cargos/index');
    }
    
    public function add(){
        if(isset ($_POST['submit'])){
            $novo = $this->post_to_obj(array('descricao','salario'), new Cargo());
            $novo->save();
            $this->index();
        }else{
            $this->render('cargos/add');
        }
    }
    
    public function edit(){
         if(isset ($_POST['submit'])){
            $novo = $this->post_to_obj(array('descricao','salario'), new Cargo());
            $novo->update();
            $this->index();
        }else{
            $this->render('cargos/add');
        }
         $this->render('cargos/edit');
    }

}

?>
