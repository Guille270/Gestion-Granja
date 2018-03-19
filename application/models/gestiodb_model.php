<?php
class Gestiodb_model extends CI_Model {
  public function __construct()
        {
                $this->load->database();
        }
     

        public function purgar($dia)
        {
                //echo $dia;
                $this->db->delete('animals', array('dataBaixa >=' => $dia));// DELETE FROM mytable  // WHERE dataBaixa >= 10-10-2018
        }

}
?>