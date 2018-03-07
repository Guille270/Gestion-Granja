<?php
class donarBaixaAnimal_model extends CI_Model {
  public function __construct()
        {
                $this->load->database();
        }
     

        public function donarBaixa($data)
        {
                $this->db->where('codi', $data['codi']);
                $this->db->update('animals', $data);
                return ($this->db->affected_rows() != 1) ? false : true;
        }
    
     public function existeix($data)
        {
                $query = $this->db->get_where('animals', array('codi' => $data));
                return ($this->db->affected_rows() != 1) ? false : true;
        }

}
?>