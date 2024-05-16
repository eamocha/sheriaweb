<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pricing extends CI_Controller {


	public function index()
	{ 	$data['active'] = "home";
        
		$this->load->view('default/partials/header',$data);
        $this->load->view('default/partials/topmenu');
		$this->load->view('default/files/pricing');
  
		$this->load->view('default/partials/footer');
	}
}
