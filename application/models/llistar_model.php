<?php
class Llistar_model extends CI_Model {
  public function __construct()
        {
                $this->load->database();
        }
     

        public function tots()
        {
                $query = $this->db->get('animals');
                return $query->result();
        }
    

}
?>