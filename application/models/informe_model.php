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
                $this->db->order_by('dataBaixa', 'ASC');
                return $query->result();
        }
    
    public function mascles($data) {
        
        /* Dia Informe 04/03/2018
            SELECT COUNT(*) from animals where (dataBaixa IS NULL OR dataBaixa > '2018-03-09')  AND dataEntrada <= '2018-03-09' AND sexe = 'M' */
        $ahir = date('Y-m-d',(strtotime ( '-1 day' , strtotime ($data) ) ));
        $sql = 'SELECT COUNT(*) as mascles from animals where (dataBaixa IS NULL OR dataBaixa > "'.$ahir.'")  AND dataEntrada <= "'.$ahir.'" AND sexe = "M"';
        
        $query = $this->db->query($sql);
        //echo $query->result()[0]->mascles;
        return $query->result();
    }
    
    public function femelles($data) {
        /* Dia Informe 04/03/2018
            SELECT * from animals where (dataBaixa IS NULL OR dataBaixa > '2018-03-09')  AND dataEntrada <= '2018-03-09' AND sexe = 'F' */
        $ahir = date('Y-m-d',(strtotime ( '-1 day' , strtotime ($data) ) ));
        $sql = 'SELECT COUNT(*) as femelles from animals where (dataBaixa IS NULL OR dataBaixa > "'.$ahir.'")  AND dataEntrada <= "'.$ahir.'" AND sexe = "F"';
        $query = $this->db->query($sql);
        
        //echo $query->result()[0]->femelles;
        return $query->result();
    }
}
?>
