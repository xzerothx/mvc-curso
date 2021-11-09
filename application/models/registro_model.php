<?php 

    class Registro_model extends CI_Model{
        
        public function alta($datos=array()){
            $this->db->insert('usuarios',$datos);
        }






    }

?>