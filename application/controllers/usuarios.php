<?php

class Usuarios extends Controller {

    function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }

    public function index() {
        $usua = new Usuario();
        $usua->get();
        $this->data['valores'] = $usua->all_to_array();
        $this->view('usuarios/index', $this->data); 
        $this->render('usuarios/index');
    }

    public function add() {
        if(isset ($_POST['submit'])){
            $novo = $this->post_to_obj(array('nome','sobrenome','login','senha','grupo'), new Usuario());
            $novo->save();
            $this->index();
        }else{
            $this->render('usuarios/add');
        }
    }
    
    public function edit() {
        if(isset ($_POST['submit'])){
            $novo = $this->post_to_obj(array('nome','sobrenome','login','senha','grupo'), new Usuario());
            $novo->update();
            $this->render('usuarios/index');
        }else{
            $this->render('usuarios/add');
        }
    }
}
?>