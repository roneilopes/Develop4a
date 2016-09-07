<?php

class Usuarios extends Controller {
    function   __construct() {
        parent::__construct();
        $this->load->native_hrlper('URLhelper');
    }
    public function index(){
        $this->render('usuarios/index');
    }
    public function add(){
         $this->render('usuarios/add');
    }
}
?>
