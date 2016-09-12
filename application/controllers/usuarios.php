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
        $this->render('usuarios/index');
    }

    public function add() {
        if(isset ($_POST['submit'])){
            $novo = $this->post_to_obj(array('nome','sobrenome','login','senha','grupo'), new Usuario());
            $novo->save();
            redirect('usuarios');
        }else{
            $this->render('usuarios/add');
        }
    }
    
    public function edit($id) {
         if(isset($_POST['submit'])){
                $nobj = $this->post_to_obj(array('nome','sobrenome','login','senha','grupo'), new Usuario());
                $nobj->save();
                redirect('usuarios');
            }
        $usuario = new Usuario();
        $usuario->get();
        $this->data['dadosEnd'] = $usuario->all_to_array();
        $this->userobj->getById($id);
        $this->data['edit_usuario'] = $this->userobj->to_array();
        $this->render('usuarios/edit');
    }
    
    public function mostrar($id) {
        $user = new Usuario();
        $user->get();
        $this->data['dadosUser'] = $user->all_to_array();
        $this->userobj->getById($id);
        $this->data['edit_usuario'] = $this->userobj->to_array();
        $this->render('usuarios/mostrar');
    }
}
?>