<?php

class Cargos extends Controller {

    function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }

    public function index() {
        $this->render('cargos/index');
    }
    
    public function add(){
         $this->render('cargos/add');
    }
    
    public function edit(){
         $this->render('cargos/edit');
    }

}

?>
