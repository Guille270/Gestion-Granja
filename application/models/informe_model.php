<?php
class Informe_model extends CI_Model {
  public function __construct()
        {
                $this->load->database();
        }
     

        public function entrades($data)
        {
                //SELECT * FROM animals WHERE dataEntrada >= data
                $query = $this->db->get_where('animals', array('dataEntrada >=' => $data, 'estat' => 'Viu'));
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
    
    public function totalvius() {
        $this->db->select('COUNT(*) as total');
        $this->db->where(array('estat' => 'Viu'));
        $query = $this->db->get('animals');
        return $query->result();
    }

}
?>
