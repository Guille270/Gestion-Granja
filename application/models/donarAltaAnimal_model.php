<?php
class donarAltaAnimal_model extends CI_Model {
  public function __construct()
        {
                $this->load->database();
        }
     

        public function donarAlta($data)
        {
                $this->db->insert('animals', $data);
                return ($this->db->affected_rows() != 1) ? false : true;
        }

}
?>