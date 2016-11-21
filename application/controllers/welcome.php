<?php
class Welcome extends CI_Controller {

    public function __construct(){
	    parent::__construct();	    
        $this->load->helper('url');
    }

    public function index(){    
    	$this->load->view('headers/librerias');   	    	
    	$this->load->view('introduccion');
    	$this->load->view('headers/footer');
	}
}