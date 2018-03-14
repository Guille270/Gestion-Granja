<?php
class Informe_model extends CI_Model {
  public function __construct()
        {
                $this->load->database();
        }
     

    
        public function entrades($data)
        {
                //SELECT * FROM animals WHERE dataEntrada >= data
                $query = $this->db->get_where('animals', array('dataEntrada >=' => $data));
                $this->db->order_by('dataEntrada', 'DESC');
                return $query->result();
        }
    
        public function sortides($data)
        {
                //SELECT * FROM animals WHERE dataBaixa >= data
                $query = $this->db->get_where('animals', array('dataBaixa >=' => $data));
                $this->db->order_by('dataBaixa', 'DESC');
                return $query->result();
        }
    
    public function mascles($data) {
        
        /* Dia Informe 04/03/2018
            SELECT * FROM ANIMALS WHERE estat = 'Viu' AND dataEntrada <= '2018/03/03' WHERE sexe = 'M' */
        $ahir = date('Y-m-d',(strtotime ( '-1 day' , strtotime ($data) ) ));          
        $this->db->select('COUNT(*) as mascles');
        $this->db->where(array('estat' => 'Viu','dataEntrada <=' => $ahir,'sexe'=>'M'));
        $query = $this->db->get('animals');
        return $query->result();
    }
    
    public function femelles($data) {
        /* Dia Informe 04/03/2018
            SELECT * FROM ANIMALS WHERE estat = 'Viu' AND dataEntrada <= '2018/03/03' WHERE sexe = 'F' */
        $ahir = date('Y-m-d',(strtotime ( '-1 day' , strtotime ($data) ) ));
        $this->db->select('COUNT(*) as femelles');
        $this->db->where(array('estat' => 'Viu','dataEntrada <=' => $ahir,'sexe'=>'F'));
        $query = $this->db->get('animals');
        return $query->result();
    }
}
?>
