<?php 
    class Home extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->model('cursos_model');
            $this->load->library(array('session'));
        }

        public function index(){
            $datos['curso']=$this->cursos_model->getCursos();
            $this->load->view('navbar/navbar');
            $this->load->view('home/home',$datos);
        }
    }






?>