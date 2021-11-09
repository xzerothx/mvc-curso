<?php 

    class Cursos_model extends CI_Model{
        public function getCursos(){
            $res=$this->db->get('cursos');
            if($res->num_rows()>0){
                return $res;
            }else{
                return false;
            }
        }
    }

?>