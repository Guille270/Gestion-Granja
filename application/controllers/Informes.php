<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informes extends CI_Controller {
    public function __construct()
        {
                parent::__construct();
                // Your own constructor code
                $this->load->helper('url');
                $this->load->model('informe_model');
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
	public function index()
	{
		$this->load->view('informesForm_view');
	}
    
    public function generals() {
        $data["dataInici"] = $this->input->post('fDataInici');
        $data["entrades"] = $this->informe_model->entrades($data["dataInici"]);
        $this->load->view('informeEntrades_view',$data);
        $data["sortides"] = $this->informe_model->sortides($data["dataInici"]);
        $data["total"] = $this->informe_model->totalvius();
        $this->load->view('informeSortides_view',$data);
        
    }
    

}
