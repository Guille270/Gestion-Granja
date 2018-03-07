<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DonarAltaAnimal extends CI_Controller {
    public function __construct()
        {
                parent::__construct();
                // Your own constructor code
                $this->load->helper('url');
                $this->load->model('donarAltaAnimal_model');
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
		$this->load->view('donarAltaForm_view');
	}
    
    public function donarAlta() {
        //Recollida dades
        $data['codi'] = $this->input->post('fCodiAnimal');
        $data['dataEntrada'] = $this->input->post('fDataEntrada');
        $data['sexe'] = $this->input->post('fSexe');
        $data['raca'] = $this->input->post('fRaca');
        $data['dataNaixement'] = $this->input->post('fDataNaixement');
        $data['motiuEntrada'] = $this->input->post('fMotiuEntrada');
        $data['documentSanitari'] = $this->input->post('fDocumentSanitari');
        $data['procedencia'] = $this->input->post('fProcedencia');
        $data['estat'] = "Viu";
        $data['dataBaixa'] = NULL;
        $data['destinacio'] = NULL;
        //Fi Recollida
        
        if ($this->donarAltaAnimal_model->donarAlta($data)) {
            $data['msg'] = "L'animal s'ha registrat correctament";
            $this->load->view('donarAltaForm_view',$data);
        } else {
             $data['msg'] = "L'animal no s'ha registrat correctament";
             $this->load->view('donarAltaForm_view',$data);
        }
    }
}
