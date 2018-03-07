<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DonarBaixaAnimal extends CI_Controller {
    public function __construct()
        {
                parent::__construct();
                // Your own constructor code
                $this->load->helper('url');
                $this->load->model('donarBaixaAnimal_model');
                
        }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    
    
    /*
	public function indexEscorxador($estat)
	{
        $data['Estat'] = $estat;
		$this->load->view('donarBaixaForm_view',$data);
	}
    
    public function indexMort($estat)
	{
        $data['Estat'] = $estat;
		$this->load->view('donarBaixaForm_view',$data);
	} 
   */
    
    public function index()
	   { 
		$this->load->view('donarBaixaForm_view');
	   }
    
    public function donarBaixa() {
        // Recollida dades
        $data['codi'] = $this->input->post('fCodiAnimal');
        $data['dataBaixa'] = $this->input->post('fDataBaixa');
        $data['estat'] = $this->input->post('fEstat');
        $data['destinacio'] = $this->input->post('fDestinacio');
        // Fi Recollida dades
        
        echo  $data['codi']." ".$data['dataBaixa']." ".$data['estat']." ".$data['destinacio'];
        
        if ($this->donarBaixaAnimal_model->existeix($data['codi'])) {
            
            if ($this->donarBaixaAnimal_model->donarBaixa($data)) {
               $data['msg'] = "L'estat del animal ha canviat a ".$data['estat'];
                $this->load->view('donarBaixaForm_view',$data);
            }
        } else {
            $data['msg'] = "L'animal no existeix";
            $this->load->view('donarBaixaForm_view',$data);
        }
        
    }
    
    
}
