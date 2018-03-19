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
    
    
    public function masclesTots() {
        
        $this->db->select('COUNT(*) as mascles');
        $this->db->where(array('sexe'=>'M'));
        $query = $this->db->get('animals');
        //echo $query->result()[0]->mascles;
        return $query->result();
    }
    
    public function femellesTotes() {
        $this->db->select('COUNT(*) as femelles');
        $this->db->where(array('sexe'=>'F'));
        $query = $this->db->get('animals');
        //echo $query->result()[0]->femelles;
        return $query->result();
    
    }
    

}
?>