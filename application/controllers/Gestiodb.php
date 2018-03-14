<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gestiodb extends CI_Controller {
    public function __construct()
        {
                parent::__construct();
                // Your own constructor code
                $this->load->helper('url');
                $this->load->model('gestiodb_model');
                
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
	public function indexPurgarDB()
	{
         $this->load->view('purgardb_view.php');
	}
    
    public function purgarDB()
	{
         $data["dataLimit"] = $this->input->post('fData');
         $data["msg"] = "Animals eliminats desde ".$data["dataLimit"];
         $this->gestiodb_model->purgar($data["dataLimit"]);
         $this->load->view('purgardb_view.php',$data);
	}
    
        
    
    
    
}
