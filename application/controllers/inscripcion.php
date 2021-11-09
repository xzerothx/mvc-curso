<?php 
    class Inscripcion extends CI_Controller{
        public function index(){
            $this->load->view('navbar/navbar');
            $this->load->view('inscri/inscri');
        }
    }
?>