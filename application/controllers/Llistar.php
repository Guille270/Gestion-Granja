<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Llistar extends CI_Controller {
    public function __construct()
        {
                parent::__construct();
                // Your own constructor code
                $this->load->helper('url');
                $this->load->model('llistar_model');
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
	public function tots()
	{
         $data['files'] = $this->llistar_model->tots();
         $data["mascles"] = $this->llistar_model->masclesTots();
         $data["femelles"] = $this->llistar_model->femellesTotes();
         $this->load->view('llistar_view',$data);
	}
    
    
    
    
}
