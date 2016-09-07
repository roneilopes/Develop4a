<?php

class Produtos extends Controller{
    function   __construct() {
        parent::__construct();
        $this->load->native_hrlper('URLhelper');
    }
    public function inex(){
        $this->render('produtos/index');
    }
    
}
?>
