<?php 
    class Usuarios_model extends CI_Model{
        public function validar($u='',$p=''){
            $this->db->where('usuario',$u);
            $this->db->where('password',$p);
            $res=$this->db->get('usuarios');
            return $res->result();
        }
    }
?>