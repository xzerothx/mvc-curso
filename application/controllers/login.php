<?php

    class Login extends CI_Controller{

        function __construct(){
            parent::__construct();
            $this->load->model('usuarios_model');
            $this->load->helper('form');
            $this->load->library('form_validation');
        }

        public function index(){
            $this->load->view('inicio/inicio');
            $this->form_validation->set_rules('usuario','Usuario','trim|required',array('required'=>'El campo usuario no puede estar vacio'));
            $this->form_validation->set_rules('password','Contraseña','trim|required',array('required'=>'El campo contraseña no puede estar vacio'));

            if($this->form_validation->run() === FALSE){
                $p = '<br>         
                <div class="col-md-6 offset-3">
                <div class="card">
                                    <div class="card-body text-center">
                                        <b>'.validation_errors();'</b>
                                    </div>
                                 </div>
                                </div>';
                        echo $p;
            }else{
                $user=$this->input->post('usuario');
                $pwd=$this->input->post('password');
                if($this->usuarios_model->validar($user,$pwd)){           
                       redirect('home');
                    }

                    
                }
            }
        }

?>



