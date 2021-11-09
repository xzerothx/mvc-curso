<?php 
    class Registro extends CI_Controller{
        public function index(){
            $this->load->view('registro/registro');
            $this->form_validation->set_rules('newuser','Usuario','trim|required',array('required'=>'No puede registrar un usuario vacio!'));
            $this->form_validation->set_rules('newpwd','Contraseña','trim|required',array('required'=>'No puede registrar una contraseña vacio!'));

            if($this->form_validation->run() == FALSE){
                echo validation_errors();
            }else{
                $datos=array(
                'usuario' => $this->input->post('newuser'),
                'password' => $this->input->post('newpwd')
                
                );
                $this->registro_model->alta($datos); }

 
    }      
        public function __construct(){
            parent::__construct();
            $this->load->model('registro_model');
            $this->load->library('form_validation');
        }
        public function registro(){
        }
    }
?>